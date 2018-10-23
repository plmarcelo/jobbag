<?php

namespace JobBag\Infrastructure\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use JobBag\Domain\Entity\Country;
use JobBag\Domain\Repository\CountryRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Country|null find($id, $lockMode = null, $lockVersion = null)
 * @method Country|null findOneBy(array $criteria, array $orderBy = null)
 * @method Country[]    findAll()
 * @method Country[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ORMCountryRepository extends ServiceEntityRepository implements CountryRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Country::class);
    }

    /**
     * @param string $languageId
     * @return ArrayCollection | Country[]
     */
    public function findActive(string $languageId): ArrayCollection
    {
        $countries = $this->createQueryBuilder('c')
            ->select('DISTINCT cl')
            ->leftJoin('c.language', 'cl')
            ->where('cl.language = :languageId')
            ->andWhere('c.parentId IS NULL')
            ->andWhere('c.active = 1')
            ->setParameter('languageId', $languageId)
            ->orderBy('cl.name', 'ASC')
            ->getQuery()
            ->getResult();

//        $countries = $this->findBy(['active' => 1, 'parentId' => null, 'language.id' => $languageId]);
        return new ArrayCollection($countries);
    }
}
