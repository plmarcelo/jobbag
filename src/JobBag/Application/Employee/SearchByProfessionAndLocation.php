<?php

namespace JobBag\Application\Employee;

use Doctrine\Common\Collections\ArrayCollection;
use JobBag\Domain\Entity\Employee;
use JobBag\Domain\Repository\EmployeeRepository;
use JobBag\Domain\Repository\LocationRepository;

class SearchByProfessionAndLocation
{
    /**
     * @var EmployeeRepository
     */
    private $employeeRepository;

    /**
     * @var string
     */
    private $defaultLocale;
    /**
     * @var LocationRepository
     */
    private $locationRepository;

    /**
     * SearchEmployee constructor.
     * @param EmployeeRepository $employeeRepository
     * @param LocationRepository $locationRepository
     * @param string $defaultLocale
     */
    public function __construct(
        EmployeeRepository $employeeRepository,
        LocationRepository $locationRepository,
        $defaultLocale
    ) {
        $this->employeeRepository = $employeeRepository;
        $this->locationRepository = $locationRepository;
        $this->defaultLocale = $defaultLocale;
    }

    /**
     * @param string $locationId
     * @param int $professionId
     * @param string|null $languageId
     * @return ArrayCollection | Employee[]
     */
    public function search($locationId, $professionId, $languageId = null): ArrayCollection
    {
        $locations = $this->locationRepository->findRelatives($locationId);

        $languageId = $languageId ?: $this->defaultLocale;

        return $this->employeeRepository->findByLocationIdAndProfessionId($locationId, $professionId, $languageId);
    }
}
