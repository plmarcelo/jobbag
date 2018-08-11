<?php

namespace JobBag\Infrastructure\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use JobBag\Domain\Entity\CountryTranslation;
use JobBag\Domain\Repository\CountryTranslationRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CountryTranslation|null find($id, $lockMode = null, $lockVersion = null)
 * @method CountryTranslation|null findOneBy(array $criteria, array $orderBy = null)
 * @method CountryTranslation[]    findAll()
 * @method CountryTranslation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ORMCountryTranslationRepository extends ServiceEntityRepository implements CountryTranslationRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CountryTranslation::class);
    }

    /**
     * @param string|null $languageId
     * @return CountryTranslation[]
     */
    public function findByLanguageId($languageId = null)
    {
        $languageId = $languageId ?: 'en';

        return $this->findBy(
            ['language' => $languageId]
        );
    }
}
