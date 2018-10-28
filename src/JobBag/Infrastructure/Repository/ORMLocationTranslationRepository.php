<?php

namespace JobBag\Infrastructure\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;
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
     * @param int $id
     * @param string $languageId
     * @return LocationTranslation
     */
    public function findById(int $id, string $languageId): LocationTranslation
    {
        try {
            return $this->createQueryBuilder('ll')
                ->select('DISTINCT ll')
                ->where('ll.language = :languageId')
                ->andWhere('ll.location = :id')
                ->setParameter('languageId', $languageId)
                ->setParameter('id', $id)
                ->orderBy('ll.name', 'ASC')
                ->getQuery()
                ->getSingleResult();
        } catch (NoResultException $e) {
        } catch (NonUniqueResultException $e) {
        }
    }

    /**
     * @param int $parentId
     * @param string $languageId
     * @return ArrayCollection|LocationTranslation[]
     */
    public function findByParentId($parentId, $languageId)
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
     * @return ArrayCollection|LocationTranslation[]
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
