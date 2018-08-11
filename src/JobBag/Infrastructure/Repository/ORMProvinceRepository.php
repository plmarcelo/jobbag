<?php

namespace JobBag\Infrastructure\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use JobBag\Domain\Entity\Province;
use JobBag\Domain\Repository\ProvinceRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Province|null find($id, $lockMode = null, $lockVersion = null)
 * @method Province|null findOneBy(array $criteria, array $orderBy = null)
 * @method Province[]    findAll()
 * @method Province[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ORMProvinceRepository extends ServiceEntityRepository implements ProvinceRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Province::class);
    }
}
