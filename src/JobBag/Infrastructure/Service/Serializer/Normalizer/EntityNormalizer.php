<?php

namespace JobBag\Infrastructure\Service\Serializer\Normalizer;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\Exception\UnexpectedValueException;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactoryInterface;
use Symfony\Component\Serializer\NameConverter\NameConverterInterface;
use Symfony\Component\PropertyAccess\PropertyAccessorInterface;
use Symfony\Component\PropertyInfo\PropertyTypeExtractorInterface;

/**
 * Entity normalizer
 */
class EntityNormalizer extends ObjectNormalizer
{
    /**
     * Entity manager
     * @var EntityManagerInterface
     */
    protected $entityManager;

    /**
     * Entity normalizer
     * @param EntityManagerInterface $entityManager
     * @param ClassMetadataFactoryInterface|null $classMetadataFactory
     * @param NameConverterInterface|null $nameConverter
     * @param PropertyAccessorInterface|null $propertyAccessor
     * @param PropertyTypeExtractorInterface|null $propertyTypeExtractor
     */
    public function __construct(
        EntityManagerInterface $entityManager,
        ?ClassMetadataFactoryInterface $classMetadataFactory = null,
        ?NameConverterInterface $nameConverter = null,
        ?PropertyAccessorInterface $propertyAccessor = null,
        ?PropertyTypeExtractorInterface $propertyTypeExtractor = null
    ) {
        parent::__construct($classMetadataFactory, $nameConverter, $propertyAccessor, $propertyTypeExtractor);
        // Entity manager
        $this->entityManager = $entityManager;
    }

    /**
     * @inheritDoc
     */
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return strpos($type, 'JobBag\\Domain\\Entity\\') === 0 && (is_numeric($data) || is_string($data));
    }

    /**
     * @inheritDoc
     */
    public function denormalize($id, $class, $format = null, array $context = [])
    {
        $entity = $this->entityManager->find($class, $id);

        if (null === $entity) {
            $baseClassName = preg_replace('/.*\\\\/m', '', $class);
            throw new UnexpectedValueException(
                sprintf('No %s found with id %s', $baseClassName, $id)
            );
        }

        return $entity;
    }

    /**
     * @inheritDoc
     */
    public function supportsNormalization($data, $format = null)
    {
        return false;
    }

}
