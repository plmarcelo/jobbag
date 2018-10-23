<?php

namespace JobBag\Infrastructure\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
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
     * @param string $languageId
     * @return ArrayCollection | CountryTranslation[]
     */
    public function findActive(string $languageId): ArrayCollection
    {
        $countries = $this->createQueryBuilder('cl')
            ->select('DISTINCT cl')
            ->leftJoin('cl.country', 'c')
            ->where('cl.language = :languageId')
            ->andWhere('c.parentId IS NULL')
            ->andWhere('c.active = 1')
            ->setParameter('languageId', $languageId)
            ->orderBy('cl.name', 'ASC')
            ->getQuery()
            ->getResult();

        return new ArrayCollection($countries);
    }
}
