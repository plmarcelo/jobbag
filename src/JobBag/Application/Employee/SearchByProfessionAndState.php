<?php

namespace JobBag\Application\Employee;

use Doctrine\Common\Collections\ArrayCollection;
use JobBag\Domain\Entity\Employee;
use JobBag\Domain\Repository\EmployeeRepository;

class SearchByProfessionAndState
{
    /**
     * @var EmployeeRepository
     */
    private $employeeRepository;

    /**
     * SearchEmployee constructor.
     * @param EmployeeRepository $employeeRepository
     */
    public function __construct(EmployeeRepository $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    /**
     * @param string $provinceId
     * @param int $professionId
     * @param string|null $languageId
     * @return ArrayCollection<Employee>
     */
    public function search($provinceId, $professionId, $languageId = null)
    {
        return $this->employeeRepository->findByProvinceIdAndProfessionId($provinceId, $professionId, $languageId);
    }
}
