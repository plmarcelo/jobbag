<?php

namespace JobBag\Domain\Repository;

use JobBag\Domain\Entity\Profession;

interface ProfessionRepository
{
    /**
     * @return Profession[]
     */
    public function findAll();
}
