<?php

namespace JobBag\Domain\Repository;

use Doctrine\Common\Collections\ArrayCollection;
use JobBag\Domain\Entity\Employee;

interface EmployeeRepository
{
    /**
     * @return ArrayCollection | Employee[]
     */
    public function findAll();

    /**
     * @param string $locationId
     * @param int $professionId
     * @param string|null $language
     * @return ArrayCollection | Employee[]
     */
    public function findByLocationIdAndProfessionId($locationId, $professionId, $language);
}
