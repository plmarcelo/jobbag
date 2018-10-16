<?php

namespace JobBag\Domain\Repository;

use Doctrine\Common\Collections\ArrayCollection;
use JobBag\Domain\Entity\Language;

/**
 * @method Language|null find($id, $lockMode = null, $lockVersion = null)
 * @method Language|null findOneBy(array $criteria, array $orderBy = null)
 * @method Language[]    findAll()
 * @method Language[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
interface LanguageRepository
{
    /**
     * @param array $values
     * @return ArrayCollection|Language[]
     */
    public function findIn(array $values = []): ArrayCollection;
}
