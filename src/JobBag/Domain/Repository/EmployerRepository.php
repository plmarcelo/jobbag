<?php

namespace JobBag\Domain\Repository;

use Doctrine\Common\Collections\ArrayCollection;
use JobBag\Domain\Entity\Employer;

interface EmployerRepository
{
    /**
     * @return ArrayCollection | Employer[]
     */
    public function findAll();
}
