<?php

namespace JobBag\Infrastructure\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use JobBag\Domain\Entity\Project;
use JobBag\Domain\Repository\ProjectRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Project|null find($id, $lockMode = null, $lockVersion = null)
 * @method Project|null findOneBy(array $criteria, array $orderBy = null)
 * @method Project[]    findAll()
 * @method Project[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ORMProjectRepository extends ServiceEntityRepository implements ProjectRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Project::class);
    }

    /**
     * @param string $since Find all created since this value
     * @param int $limit Find latest n elements. All in case value is null
     *
     * @return Collection|Project[]
     */
    public function findLatest(string $since, int $limit = null): Collection
    {
        $queryBuilder = $this->createQueryBuilder('p')
            ->where('p.createdAt > :since')
            ->setParameter('since', $since)
            ->orderBy('p.createdAt', 'ASC');

        if ($limit !== null) {
            $queryBuilder->setMaxResults($limit);
        }

        $result = $queryBuilder
            ->getQuery()
            ->getResult();

        return new ArrayCollection($result);
    }

    /**
     * @param string $since Find all created since this value
     * @param int $professionId
     * @param int $limit Find latest n elements. All in case value is null
     *
     * @return Collection|Project[]
     */
    public function findLatestByProfessionId(string $since, int $professionId, int $limit = null): Collection
    {
        $queryBuilder = $this->createQueryBuilder('p')
            ->where('p.createdAt > :since')
            ->andWhere('p.profession = :profession')
            ->setParameter('since', $since)
            ->setParameter('profession', $professionId)
            ->orderBy('p.createdAt', 'ASC');

        if ($limit !== null) {
            $queryBuilder->setMaxResults($limit);
        }

        $result = $queryBuilder
            ->getQuery()
            ->getResult();

        return new ArrayCollection($result);
    }
}
