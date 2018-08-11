<?php

namespace JobBag\Domain\Repository;

use Doctrine\Common\Collections\ArrayCollection;
use JobBag\Domain\Entity\Employee;

interface EmployeeRepository
{
    /**
     * @return Employee[]
     */
    public function findAll();

    /**
     * @param string $provinceId
     * @param int $professionId
     * @param string|null $language
     * @return ArrayCollection<Employee>
     */
    public function findByProvinceIdAndProfessionId($provinceId, $professionId, $language = null);
}
