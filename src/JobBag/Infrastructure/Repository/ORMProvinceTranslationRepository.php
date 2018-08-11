<?php

namespace JobBag\Infrastructure\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use JobBag\Domain\Entity\ProvinceTranslation;
use JobBag\Domain\Repository\ProvinceTranslationRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ProvinceTranslation|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProvinceTranslation|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProvinceTranslation[]    findAll()
 * @method ProvinceTranslation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ORMProvinceTranslationRepository extends ServiceEntityRepository implements ProvinceTranslationRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ProvinceTranslation::class);
    }

    /**
     * @param string|null $languageId
     * @return ProvinceTranslation[]
     */
    public function findByLanguageId($languageId = null)
    {
        $languageId = $languageId ?: 'en';

        return $this->findBy(
            ['language' => $languageId]
        );
    }
}
