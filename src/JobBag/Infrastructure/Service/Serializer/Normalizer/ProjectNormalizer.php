<?php

namespace JobBag\Infrastructure\Service\Serializer\Normalizer;

use JobBag\Domain\Entity\Project;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\User\UserInterface;
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

class ProjectNormalizer implements SerializerAwareInterface, DenormalizerInterface, CacheableSupportsMethodInterface
{
    use SerializerAwareTrait;

    public const NEW_PROJECT = 'new';

    private static $professionAttributes = [
        'professionId' => 'profession'
    ];

    /**
     * @var ObjectNormalizer
     */
    private $objectNormalizer;

    /**
     * @var UserInterface
     */
    private $user;

    /**
     * ProjectDenormalizer constructor.
     * @param ObjectNormalizer $objectNormalizer
     * @param TokenStorageInterface $tokenStorage
     */
    public function __construct(ObjectNormalizer $objectNormalizer, TokenStorageInterface $tokenStorage)
    {
        $this->objectNormalizer = $objectNormalizer;
        if (null !== $tokenStorage->getToken()) {
            $this->user = $tokenStorage->getToken()->getUser();
        }
    }

    /**
     * Denormalizes data back into an object of the given class.
     *
     * @param mixed $data Data to restore
     * @param string $class The expected class to instantiate
     * @param string $format Format the given data was extracted from
     * @param array $context Options available to the denormalizer
     *
     * @return object|Project
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
        $data['projectStatus'] = self::NEW_PROJECT;

        $data = $this->remapAttributes($data);

        /**
         * @var Project $project
         */
        $project = $this->objectNormalizer->denormalize($data, $class, $format, $context);

        return $project->setEmployer($this->user);
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
        return $type === Project::class;
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
    private function remapAttributes(array $data): array
    {
        $professionData = [];
        foreach (self::$professionAttributes as $attrName => $newAttrName) {
            $professionData[$newAttrName] = $data[$attrName];
            unset($data[$attrName]);
        }

        return array_merge($data, $professionData);
    }
}
