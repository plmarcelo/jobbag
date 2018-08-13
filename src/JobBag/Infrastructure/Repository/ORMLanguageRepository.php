<?php

namespace JobBag\Infrastructure\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use JobBag\Domain\Entity\Language;
use JobBag\Domain\Repository\LanguageRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Language|null find($id, $lockMode = null, $lockVersion = null)
 * @method Language|null findOneBy(array $criteria, array $orderBy = null)
 * @method Language[]    findAll()
 * @method Language[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ORMLanguageRepository extends ServiceEntityRepository implements LanguageRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Language::class);
    }
}
