<?php

namespace JobBag\Domain\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use RuntimeException;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Employee
 *
 * @ORM\Table(name="employee", indexes={@ORM\Index(name="idx_employee_scholarship_id", columns={"scholarship_id"})})
 * @ORM\Entity(repositoryClass="JobBag\Domain\Repository\EmployeeRepository")
 */
class Employee
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
     * @ORM\OneToOne(targetEntity="Person")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="person_id", referencedColumnName="id")
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

//    /**
//     * @var \Doctrine\Common\Collections\Collection
//     *
//     * @ORM\ManyToMany(targetEntity="Profession", inversedBy="employee")
//     * @ORM\JoinTable(name="employee_experience",
//     *   joinColumns={
//     *     @ORM\JoinColumn(name="employee_id", referencedColumnName="id")
//     *   },
//     *   inverseJoinColumns={
//     *     @ORM\JoinColumn(name="profession_id", referencedColumnName="id")
//     *   }
//     * )
//     */
//    private $profession;
//
    /**
     * @var Collection|null
     *
     * @ORM\OneToMany(
     *     targetEntity="Experience",
     *     mappedBy="employee",
     *     cascade={ "persist", "remove" },
     *     orphanRemoval=TRUE,
     *     fetch="EXTRA_LAZY"
     * )
     */
    private $experience;

    /**
     * Constructor
     */
    public function __construct()
    {
//        $this->profession = new \Doctrine\Common\Collections\ArrayCollection();
        $this->experience = new ArrayCollection();
    }

    /**
     * @Groups("employee")
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Scholarship|null
     * @Groups({"employee"})
     */
    public function getScholarship(): ?Scholarship
    {
        return $this->scholarship;
    }

    public function setScholarship(?Scholarship $scholarship): self
    {
        $this->scholarship = $scholarship;

        return $this;
    }
//
//    /**
//     * @return Collection|Profession[]
//     * @Groups({"employee"})
//     */
//    public function getProfession(): Collection
//    {
//        return $this->profession;
//    }
//
//    public function addProfession(Profession $profession): self
//    {
//        if (!$this->profession->contains($profession)) {
//            $this->profession[] = $profession;
//        }
//
//        return $this;
//    }
//
//    public function removeProfession(Profession $profession): self
//    {
//        if ($this->profession->contains($profession)) {
//            $this->profession->removeElement($profession);
//        }
//
//        return $this;
//    }

    /**
     * Person entity properties
     */

    /**
     * @return string
     * @Groups({"employee"})
     */
    public function getName()
    {
        return $this->person->getName();
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        if (!$this->person) {
            $this->person = new Person();
        }

        $this->person->setName($name);

        return $this;
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
     * @param string $email
     * @return Employee
     */
    public function setEmail($email)
    {
        if (!$this->person) {
            $this->person = new Person();
        }

        $this->person->setEmail($email);

        return $this;
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
     * @param string $scholarshipId
     * @return null|string
     */
    public function setScholarshipId($scholarshipId)
    {
        if (!$this->scholarship) {
            $this->scholarship = new Scholarship();
        }

        $this->scholarship->setId($scholarshipId);

        return $this;
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
     * @Groups({"employee"})
     */
    public function getCountry(): ?Country
    {
        return $this->person->getCountry();
    }

    /**
     * @Groups({"employee"})
     */
    public function getProvince(): ?Province
    {
        return $this->person->getProvince();
    }

    /**
     * @Groups({"employee"})
     */
    public function getCity(): ?City
    {
        return $this->person->getCity();
    }

    /**
     * @return string
     * @Groups({"employee"})
     */
    public function getRate()
    {
        return $this->person->getRate();
    }

    /**
     * @return Collection|null
     * @Groups({"employee"})
     */
    public function getExperience(): ?Collection
    {
        return $this->experience;
    }

    /**
     * @param Collection|null $experiences
     * @return Employee
     */
    public function setExperience(?Collection $experiences): Employee
    {
        foreach ($experiences as $experience) {
            if (!$experience instanceof Experience) {
                throw new RuntimeException('Esta intentando añadir una experiencia incorrecta');
            }

            $this->addExperience($experience);
        }

        return $this;
    }

    /**
     * @param Experience $experience
     * @return Employee
     */
    public function addExperience(Experience $experience): Employee
    {
        $this->experience->add($experience);
        $experience->setEmployee($this);

        return $this;
    }
}
