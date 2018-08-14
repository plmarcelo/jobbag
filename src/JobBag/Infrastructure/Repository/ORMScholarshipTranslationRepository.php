<?php

namespace JobBag\Infrastructure\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use JobBag\Domain\Entity\ScholarshipTranslation;
use JobBag\Domain\Repository\ScholarshipTranslationRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ScholarshipTranslation|null find($id, $lockMode = null, $lockVersion = null)
 * @method ScholarshipTranslation|null findOneBy(array $criteria, array $orderBy = null)
 * @method ScholarshipTranslation[]    findAll()
 * @method ScholarshipTranslation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ORMScholarshipTranslationRepository extends ServiceEntityRepository implements ScholarshipTranslationRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ScholarshipTranslation::class);
    }

    /**
     * @param string|null $languageId
     * @return ScholarshipTranslation[]
     */
    public function findByLanguageId($languageId = null)
    {
        $languageId = $languageId ?: 'en';

        return $this->findBy(
            ['language' => $languageId]
        );
    }
}
