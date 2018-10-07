<?php

namespace JobBag\Infrastructure\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use JobBag\Domain\Entity\ProfessionTranslation;
use JobBag\Domain\Repository\ProfessionTranslationRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ProfessionTranslation|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProfessionTranslation|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProfessionTranslation[]    findAll()
 * @method ProfessionTranslation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ORMProfessionTranslationRepository extends ServiceEntityRepository implements ProfessionTranslationRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ProfessionTranslation::class);
    }

    /**
     * @param string $languageId
     * @param int $parentId
     * @return ProfessionTranslation[]
     */
    public function findByParentId($languageId, $parentId)
    {
        $result = $this->createQueryBuilder('pl')
            ->select('DISTINCT pl')
            ->join('pl.profession', 'p')
            ->where('pl.language = :languageId')
            ->andWhere('p.parent = :parentId')
            ->setParameter('languageId', $languageId)
            ->setParameter('parentId', $parentId)
            ->orderBy('pl.name', 'ASC')
            ->getQuery()
            ->getResult();

        return new ArrayCollection($result);
    }

    /**
     * @param string $languageId
     * @return ProfessionTranslation[]
     */
    public function findRoots($languageId)
    {
        $result = $this->createQueryBuilder('pl')
            ->select('DISTINCT pl')
            ->join('pl.profession', 'p')
            ->where('pl.language = :languageId')
            ->andWhere('p.parent IS NULL')
            ->setParameter('languageId', $languageId)
            ->orderBy('pl.name', 'ASC')
            ->getQuery()
            ->getResult();

        return new ArrayCollection($result);
    }
}
