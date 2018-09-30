<?php

namespace JobBag\Infrastructure\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use JobBag\Domain\Entity\CityTranslation;
use JobBag\Domain\Repository\CityTranslationRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CityTranslation|null find($id, $lockMode = null, $lockVersion = null)
 * @method CityTranslation|null findOneBy(array $criteria, array $orderBy = null)
 * @method CityTranslation[]    findAll()
 * @method CityTranslation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ORMCityTranslationRepository extends ServiceEntityRepository implements CityTranslationRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CityTranslation::class);
    }

    /**
     * @param string|null $languageId
     * @return CityTranslation[]
     */
    public function findByLanguageId($languageId = null)
    {
        $languageId = $languageId ?: 'en';

        return $this->findBy(
            ['language' => $languageId]
        );
    }
}
