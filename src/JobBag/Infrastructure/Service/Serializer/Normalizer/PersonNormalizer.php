<?php

namespace JobBag\Infrastructure\Service\Serializer\Normalizer;

use JobBag\Domain\Entity\Person;
use JobBag\Domain\Entity\User;
use JobBag\Domain\Repository\LanguageRepository;
use JobBag\Domain\Repository\UserRepository;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\Exception\BadMethodCallException;
use Symfony\Component\Serializer\Exception\ExtraAttributesException;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Exception\LogicException;
use Symfony\Component\Serializer\Exception\RuntimeException;
use Symfony\Component\Serializer\Exception\UnexpectedValueException;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\SerializerAwareInterface;
use Symfony\Component\Serializer\SerializerAwareTrait;

class PersonNormalizer implements SerializerAwareInterface, DenormalizerInterface, CacheableSupportsMethodInterface
{
    use SerializerAwareTrait;

    private static $defaultValues = [
        'avatar' => ''
    ];

    private static $requiredAttributes = [
        'name'      => 'Person name',
        'languages' => 'Languages',
        'email'     => 'Email',
        'password'  => 'Password'
    ];

    /**
     * @var LanguageRepository
     */
    private $languageRepository;

    /**
     * @var UserPasswordEncoderInterface
     */
    private $passwordEncoder;

    /**
     * EmployeeDenormalizer constructor.
     * @param LanguageRepository $languageRepository
     * @param UserPasswordEncoderInterface $passwordEncoder
     */
    public function __construct(
        LanguageRepository $languageRepository,
        UserPasswordEncoderInterface $passwordEncoder
    ) {
        $this->languageRepository = $languageRepository;
        $this->passwordEncoder = $passwordEncoder;
    }

    /**
     * Denormalizes data back into an object of the given class.
     *
     * @param mixed $data Data to restore
     * @param string $class The expected class to instantiate
     * @param string $format Format the given data was extracted from
     * @param array $context Options available to the denormalizer
     *
     * @return object | Person
     *
     * @throws BadMethodCallException   Occurs when the normalizer is not called in an expected context
     * @throws InvalidArgumentException Occurs when the arguments are not coherent or not supported
     * @throws UnexpectedValueException Occurs when the item cannot be hydrated with the given data
     * @throws ExtraAttributesException Occurs when the item doesn't have attribute to receive given data
     * @throws LogicException           Occurs when the normalizer is not supposed to denormalize
     * @throws RuntimeException         Occurs if the class cannot be instantiated
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $data = $this->setDefaults($data);
        $this->validateAttributes($data);

        $person = new Person();
        $person->setName($data['name']);
        $person->setAvatar($data['avatar']);

        $languagesData = array_column($data['languages'], 'motherTongue', 'id');
        $languages = $this->languageRepository->findIn(array_keys($languagesData));
        foreach ($languages as $language) {
            $person->addKnownLanguage($language, $languagesData[$language->getId()]);
        }

        $person->setUser($this->denormalizeUser($data));

        return $person;
    }

    /**
     * Checks whether the given class is supported for denormalization by this normalizer.
     *
     * @param mixed $data Data to denormalize from
     * @param string $type The class to which the data should be denormalized
     * @param string $format The format being deserialized from
     *
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === Person::class;
    }

    /**
     * @return bool
     */
    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }

    /**
     * @param array $data
     * @return array
     */
    private function setDefaults(array $data): array
    {
        return array_merge(self::$defaultValues, $data);
    }

    /**
     * @param array $data
     */
    private function validateAttributes(array $data): void
    {
        foreach (self::$requiredAttributes as $name => $label) {
            if (!array_key_exists($name, $data)) {
                throw new InvalidArgumentException($label . ' is required.');
            }
        }

        if (\count($data['languages']) === 0) {
            throw new InvalidArgumentException(
                sprintf('At least a %s should be specified.', self::$requiredAttributes['languages'])
            );
        }
    }

    /**
     * @param array $data
     * @return User
     */
    private function denormalizeUser(array $data): User
    {
        $user = new User();
        $user->setUsername($data['email']);

        $password = $this->passwordEncoder->encodePassword($user, $data['password']);
        $user->setPassword($password);

        return $user;
    }
}
