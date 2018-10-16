<?php

namespace JobBag\Domain\Repository;

use Doctrine\Common\Collections\ArrayCollection;
use JobBag\Domain\Entity\Location;

/**
 * @method Location|null find($id, $lockMode = null, $lockVersion = null)
 * @method Location|null findOneBy(array $criteria, array $orderBy = null)
 * @method Location[]    findAll()
 * @method Location[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
interface LocationRepository
{
    /**
     * @param array $values
     * @return ArrayCollection|Location[]
     */
    public function findIn(array $values = []): ArrayCollection;
}
