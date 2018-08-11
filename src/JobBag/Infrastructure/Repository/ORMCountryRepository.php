<?php

namespace JobBag\Infrastructure\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
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
}
