<?php

namespace JobBag\Infrastructure\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;
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
     * @param int $parentId
     * @param string $languageId
     * @return ArrayCollection|ProfessionTranslation[]
     */
    public function findByParentId(int $parentId, string $languageId)
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
     * @param int $countryId
     * @param string $languageId
     * @return ArrayCollection|ProfessionTranslation[]
     */
    public function findByCountryId(int $countryId, string $languageId)
    {
        $result = $this->createQueryBuilder('pl')
            ->select('DISTINCT pl')
            ->join('pl.profession', 'p')
            ->where('pl.language = :languageId')
            ->andWhere('p.country = :countryId')
            ->andWhere('p.parent IS NULL')
            ->setParameter('languageId', $languageId)
            ->setParameter('countryId', $countryId)
            ->orderBy('pl.name', 'ASC')
            ->getQuery()
            ->getResult();

        return new ArrayCollection($result);
    }

    /**
     * @param int $id
     * @param string $languageId
     * @return ProfessionTranslation
     */
    public function findById(int $id, string $languageId): ProfessionTranslation
    {
        try {
            return $this->createQueryBuilder('pl')
                ->select('DISTINCT pl')
                ->where('pl.language = :languageId')
                ->andWhere('pl.profession = :id')
                ->setParameter('languageId', $languageId)
                ->setParameter('id', $id)
                ->getQuery()
                ->getSingleResult();
        } catch (NoResultException $e) {
        } catch (NonUniqueResultException $e) {
        }
    }
}
