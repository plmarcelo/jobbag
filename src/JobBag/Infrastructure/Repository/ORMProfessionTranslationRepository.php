<?php

namespace JobBag\Infrastructure\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
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
     * @param string|null $languageId
     * @return ProfessionTranslation[]
     */
    public function findByLanguageId($languageId = null)
    {
        $languageId = $languageId ?: 'en';

        return $this->findBy(
            ['language' => $languageId]
        );
    }
}
