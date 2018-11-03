<?php

namespace JobBag\Infrastructure\Service\Serializer\Normalizer;

use Doctrine\ORM\EntityManagerInterface;
use JobBag\Domain\Entity\Employee;
use JobBag\Domain\Repository\LocationRepository;
use Symfony\Component\Serializer\Exception\BadMethodCallException;
use Symfony\Component\Serializer\Exception\CircularReferenceException;
use Symfony\Component\Serializer\Exception\ExtraAttributesException;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Exception\LogicException;
use Symfony\Component\Serializer\Exception\RuntimeException;
use Symfony\Component\Serializer\Exception\UnexpectedValueException;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\SerializerAwareInterface;
use Symfony\Component\Serializer\SerializerAwareTrait;

class EmployeeNormalizer implements SerializerAwareInterface, DenormalizerInterface, NormalizerInterface, CacheableSupportsMethodInterface
{
    use SerializerAwareTrait;

    private static $defaultValues = [
        'avatar' => '',
        'resume' => '',
        'roles'  => ['EMPLOYEE']
    ];

    private static $requiredAttributes = [
        'name'               => 'Employee name',
        'languages'          => 'Languages',
        'workingLocationIds' => 'Working area',
        'experience'         => 'Experince',
        'email'              => 'Email',
        'password'           => 'Password'
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
     * @return object|Employee
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
        return $type === Employee::class;
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

        $data['workingLocations'] = $data['workingLocationIds'];
        unset($data['workingLocationIds']);
        return array_merge($data, ['person' => $personData]);
    }

    /**
     * Normalizes an object into a set of arrays/scalars.
     *
     * @param mixed $object Object to normalize
     * @param string $format Format the normalization result will be encoded as
     * @param array $context Context options for the normalizer
     *
     * @return array|string|int|float|bool
     *
     * @throws InvalidArgumentException   Occurs when the object given is not an attempted type for the normalizer
     * @throws CircularReferenceException Occurs when the normalizer detects a circular reference when no circular
     *                                    reference handler can fix it
     * @throws LogicException             Occurs when the normalizer is not called in an expected context
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = $this->objectNormalizer->normalize($object, $format, $context);

        return $data;
    }

    /**
     * Checks whether the given class is supported for normalization by this normalizer.
     *
     * @param mixed $data Data to normalize
     * @param string $format The format being (de-)serialized from or into
     *
     * @return bool
     */
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof Employee;
    }
}
