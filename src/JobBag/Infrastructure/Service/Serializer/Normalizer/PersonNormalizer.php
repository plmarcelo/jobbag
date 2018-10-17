<?php

namespace JobBag\Infrastructure\Service\Serializer\Normalizer;

use JobBag\Domain\Entity\Person;
use JobBag\Domain\Entity\User;
use JobBag\Domain\Repository\LanguageRepository;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\Exception\BadMethodCallException;
use Symfony\Component\Serializer\Exception\ExtraAttributesException;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Exception\LogicException;
use Symfony\Component\Serializer\Exception\RuntimeException;
use Symfony\Component\Serializer\Exception\UnexpectedValueException;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\SerializerAwareInterface;
use Symfony\Component\Serializer\SerializerAwareTrait;

class PersonNormalizer implements SerializerAwareInterface, DenormalizerInterface
{
    use SerializerAwareTrait;

    /**
     * @var UserPasswordEncoderInterface
     */
    private $passwordEncoder;

    /**
     * @var LanguageRepository
     */
    private $languageRepository;

    /**
     * EmployeeDenormalizer constructor.
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @param LanguageRepository $languageRepository
     */
    public function __construct(
        UserPasswordEncoderInterface $passwordEncoder,
        LanguageRepository $languageRepository
    ) {
        $this->passwordEncoder = $passwordEncoder;
        $this->languageRepository = $languageRepository;
    }

    /**
     * Denormalizes data back into an object of the given class.
     *
     * @param mixed $data Data to restore
     * @param string $class The expected class to instantiate
     * @param string $format Format the given data was extracted from
     * @param array $context Options available to the denormalizer
     *
     * @return object
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
        $person = new Person();
        $person->setName($data['name']);
        $person->setAvatar($data['avatar']);

        $languagesData = array_column($data['languages'], 'motherTongue', 'id');
        $languages = $this->languageRepository->findIn(array_keys($languagesData));
        foreach ($languages as $language) {
            $person->addKnownLanguage($language, $languagesData[$language->getId()]);
        }

        $user = $this->generateNewUser($data);
        $person->setUser($user);

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
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === Person::class;
    }

    /**
     * @param mixed $data Data to restore
     * @return User
     */
    private function generateNewUser($data): User
    {
        $user = new User();
        $user->setUsername($data['email']);

        $password = $this->passwordEncoder->encodePassword($user, $data['password']);
        $user->setPassword($password);

        return $user;
    }
}
