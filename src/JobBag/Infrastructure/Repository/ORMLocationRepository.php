<?php

namespace JobBag\Infrastructure\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use JobBag\Domain\Entity\Location;
use JobBag\Domain\Repository\LocationRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Location|null find($id, $lockMode = null, $lockVersion = null)
 * @method Location|null findOneBy(array $criteria, array $orderBy = null)
 * @method Location[]    findAll()
 * @method Location[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ORMLocationRepository extends ServiceEntityRepository implements LocationRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Location::class);
    }

    /**
     * @param array $values
     * @return ArrayCollection|Location[]
     */
    public function findIn(array $values = []): ArrayCollection
    {
        $queryBuilder = $this->createQueryBuilder('l');

        $result = $queryBuilder->select()
            ->where($queryBuilder->expr()->in('l.id', $values))
            ->andWhere($queryBuilder->expr()->eq('l.active', 1))
            ->getQuery()
            ->getResult();

        return new ArrayCollection($result);
    }
}
