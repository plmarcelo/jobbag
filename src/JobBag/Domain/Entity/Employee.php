<?php

namespace JobBag\Domain\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Employee
 *
 * @ORM\Table(name="employee", indexes={@ORM\Index(name="idx_employee_scholarship_id", columns={"scholarship_id"})})
 * @ORM\Entity
 */
class Employee
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="resume", type="string", length=1000, nullable=true)
     * @Groups({"employee"})
     */
    private $resume;

    /**
     * @var Person
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Person")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="person_id", referencedColumnName="user_id")
     * })
     */
    private $person;

    /**
     * @var Scholarship
     *
     * @ORM\ManyToOne(targetEntity="Scholarship")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="scholarship_id", referencedColumnName="id")
     * })
     */
    private $scholarship;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Profession", inversedBy="employee")
     * @ORM\JoinTable(name="employee_experience",
     *   joinColumns={
     *     @ORM\JoinColumn(name="employee_id", referencedColumnName="user_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="profession_id", referencedColumnName="id")
     *   }
     * )
     */
    private $profession;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->profession = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getResume(): ?string
    {
        return $this->resume;
    }

    public function setResume(?string $resume): self
    {
        $this->resume = $resume;

        return $this;
    }

    public function getPerson(): ?Person
    {
        return $this->person;
    }

    public function setPerson(?Person $person): self
    {
        $this->person = $person;

        return $this;
    }

    public function getScholarship(): ?Scholarship
    {
        return $this->scholarship;
    }

    public function setScholarship(?Scholarship $scholarship): self
    {
        $this->scholarship = $scholarship;

        return $this;
    }

    /**
     * @return Collection|Profession[]
     */
    public function getProfession(): Collection
    {
        return $this->profession;
    }

    public function addProfession(Profession $profession): self
    {
        if (!$this->profession->contains($profession)) {
            $this->profession[] = $profession;
        }

        return $this;
    }

    public function removeProfession(Profession $profession): self
    {
        if ($this->profession->contains($profession)) {
            $this->profession->removeElement($profession);
        }

        return $this;
    }

    /**
     * Person entity properties
     */

    /**
     * @return int
     * @Groups({"employee"})
     */
    public function getId()
    {
        return $this->person->getId();
    }

    /**
     * @return string
     * @Groups({"employee"})
     */
    public function getName()
    {
        return $this->person->getName();
    }

    /**
     * @return string
     * @Groups({"employee"})
     */
    public function getEmail()
    {
        return $this->person->getEmail();
    }

    /**
     * @return \DateTimeInterface|null
     * @Groups({"employee"})
     */
    public function getBirthdate()
    {
        return $this->person->getBirthdate();
    }

    /**
     * @return null|string
     * @Groups({"employee"})
     */
    public function getAvatar()
    {
        return $this->person->getAvatar();
    }

    /**
     * @return string
     * @Groups({"employee"})
     */
    public function getScholarshipName()
    {
        return $this->scholarship->getName();
    }

    /**
     * @return string
     * @Groups({"employee"})
     */
    public function getAddress()
    {
        return $this->person->getAddress();
    }

    /**
     * @return string
     * @Groups({"employee"})
     */
    public function getZipCode()
    {
        return $this->person->getZipCode();
    }

    /**
     * @return null|string
     * @Groups({"employee"})
     */
    public function getCountryName()
    {
        return $this->person->getCountryName();
    }

    /**
     * @return null|string
     * @Groups({"employee"})
     */
    public function getProvinceName()
    {
        return $this->person->getProvinceName();
    }

    /**
     * @return null|string
     * @Groups({"employee"})
     */
    public function getCityName()
    {
        return $this->person->getCityName();
    }

    /**
     * @return string
     * @Groups({"employee"})
     */
    public function getRate()
    {
        return $this->person->getRate();
    }
}
