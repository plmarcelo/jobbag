<?php

namespace JobBag\Infrastructure\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use JobBag\Domain\Entity\LocationTranslation;
use JobBag\Domain\Repository\LocationTranslationRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LocationTranslation|null find($id, $lockMode = null, $lockVersion = null)
 * @method LocationTranslation|null findOneBy(array $criteria, array $orderBy = null)
 * @method LocationTranslation[]    findAll()
 * @method LocationTranslation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ORMLocationTranslationRepository extends ServiceEntityRepository implements LocationTranslationRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LocationTranslation::class);
    }

    /**
     * @param string $languageId
     * @param int $parentId
     * @return LocationTranslation[]
     */
    public function findByParentId($languageId, $parentId)
    {
        $result = $this->createQueryBuilder('ll')
            ->select('DISTINCT ll')
            ->join('ll.location', 'l')
            ->where('ll.language = :languageId')
            ->andWhere('l.parent = :parentId')
            ->setParameter('languageId', $languageId)
            ->setParameter('parentId', $parentId)
            ->orderBy('ll.name', 'ASC')
            ->getQuery()
            ->getResult();

        return new ArrayCollection($result);
    }

    /**
     * @param string $languageId
     * @return LocationTranslation[]
     */
    public function findRoots($languageId)
    {
        $result = $this->createQueryBuilder('ll')
            ->select('DISTINCT ll')
            ->join('ll.location', 'l')
            ->where('ll.language = :languageId')
            ->andWhere('l.parent IS NULL')
            ->setParameter('languageId', $languageId)
            ->orderBy('ll.name', 'ASC')
            ->getQuery()
            ->getResult();

        return new ArrayCollection($result);
    }
}
