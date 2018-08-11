<?php

namespace JobBag\Infrastructure\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use JobBag\Domain\Entity\Profession;
use JobBag\Domain\Repository\ProfessionRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Profession|null find($id, $lockMode = null, $lockVersion = null)
 * @method Profession|null findOneBy(array $criteria, array $orderBy = null)
 * @method Profession[]    findAll()
 * @method Profession[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DoctrineProfessionRepository extends ServiceEntityRepository implements ProfessionRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Profession::class);
    }
}
