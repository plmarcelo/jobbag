<?php

namespace JobBag\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Experience
 *
 * @ORM\Table(name="experience")
 * @ORM\Entity
 */
class Experience
{
    /**
     * @var Employee
     *
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="Employee")
     * @ORM\JoinColumn(name="employee_id", referencedColumnName="id", nullable=false)
     */
    private $employee;

    /**
     * @var Profession
     *
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="Profession")
     * @ORM\JoinColumn(name="profession_id", referencedColumnName="id", nullable=false)
     */
    private $profession;

    /**
     * @var int
     * @ORM\Column(name="years", type="integer", nullable=false, options={"default": 1})
     */
    private $years;

    /**
     * @return Employee
     */
    public function getEmployee(): Employee
    {
        return $this->employee;
    }

    /**
     * @param Employee $employee
     * @return Experience
     */
    public function setEmployee(Employee $employee): Experience
    {
        $this->employee = $employee;

        return $this;
    }

    /**
     * @return Profession
     * @Groups({"employee"})
     */
    public function getProfession(): Profession
    {
        return $this->profession;
    }

    /**
     * @param Profession $profession
     * @return Experience
     */
    public function setProfession(Profession $profession): Experience
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * @return null|int
     * @Groups({"public"})
     */
    public function getProfessionId(): ?int
    {
        return $this->profession instanceof Profession ? $this->profession->getId() : null;
    }

    /**
     * @return int
     * @Groups({"public"})
     */
    public function getYears(): int
    {
        return $this->years;
    }

    /**
     * @param int $years
     * @return Experience
     * @Groups({"fillable"})
     */
    public function setYears($years): Experience
    {
        $this->years = $years;

        return $this;
    }
}
