<?php

namespace JobBag\Infrastructure\Service\Serializer\Normalizer;

use JobBag\Domain\Entity\Employer;
use Symfony\Component\Serializer\Exception\BadMethodCallException;
use Symfony\Component\Serializer\Exception\ExtraAttributesException;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Exception\LogicException;
use Symfony\Component\Serializer\Exception\RuntimeException;
use Symfony\Component\Serializer\Exception\UnexpectedValueException;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\SerializerAwareInterface;
use Symfony\Component\Serializer\SerializerAwareTrait;

class EmployerNormalizer implements SerializerAwareInterface, DenormalizerInterface, CacheableSupportsMethodInterface
{
    use SerializerAwareTrait;

    private static $defaultValues = [
        'avatar' => '',
        'roles'  => ['EMPLOYER']
    ];

    private static $requiredAttributes = [
        'name'      => 'Employer name',
        'languages' => 'Languages',
        'email'     => 'Email',
        'password'  => 'Password'
    ];

    private static $personAttributes = [
        'name'      => 'name',
        'languages' => 'languages',
        'avatar'    => 'avatar',
        'email'     => 'email',
        'password'  => 'password',
        'roles'     => 'roles'
    ];

    /**
     * @var ObjectNormalizer
     */
    private $objectNormalizer;

    /**
     * EmployeeDenormalizer constructor.
     * @param ObjectNormalizer $objectNormalizer
     */
    public function __construct(
        ObjectNormalizer $objectNormalizer
    ) {
        $this->objectNormalizer = $objectNormalizer;
    }

    /**
     * Denormalizes data back into an object of the given class.
     *
     * @param mixed $data Data to restore
     * @param string $class The expected class to instantiate
     * @param string $format Format the given data was extracted from
     * @param array $context Options available to the denormalizer
     *
     * @return object|Employer
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

        $data = $this->remapAttributes($data);

        return $this->objectNormalizer->denormalize($data, $class, $format, $context);
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
        return $type === Employer::class;
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
     * @return array
     */
    private function remapAttributes(array $data): array
    {
        $personData = [];
        foreach (self::$personAttributes as $attrName => $newAttrName) {
            $personData[$newAttrName] = $data[$attrName];
            unset($data[$attrName]);
        }

        return array_merge($data, ['person' => $personData]);
    }
}
