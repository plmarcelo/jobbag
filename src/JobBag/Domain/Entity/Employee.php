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
     * @var Person
     *
     * @ORM\OneToOne(targetEntity="Person", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="person_id", referencedColumnName="id")
     */
    private $person;

    /**
     * @var string|null
     *
     * @ORM\Column(name="resume", type="string", length=1000, nullable=true)
     */
    private $resume;

    /**
     * @var Scholarship
     *
     * @ORM\ManyToOne(targetEntity="Scholarship")
     * @ORM\JoinColumn(name="scholarship_id", referencedColumnName="id")
     */
    private $scholarship;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Location")
     * @ORM\JoinTable(name="working_location",
     *   joinColumns={@ORM\JoinColumn(name="employee_id", referencedColumnName="id")},
     *   inverseJoinColumns={@ORM\JoinColumn(name="location_id", referencedColumnName="id")}
     * )
     */
    private $workingLocations;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->experience = new ArrayCollection();
        $this->workingLocations = new ArrayCollection();
    }

    /**
     * @return int|null
     * @Groups("public")
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return null|string
     * @Groups("public")
     */
    public function getResume(): ?string
    {
        return $this->resume;
    }

    /**
     * @param null|string $resume
     * @return Employee
     */
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
     */
    public function getScholarship(): ?Scholarship
    {
        return $this->scholarship;
    }

    /**
     * @return string|null
     * @Groups({"public"})
     */
    public function getScholarshipId(): ?string
    {
        if ($this->scholarship instanceof Scholarship) {
            return $this->scholarship->getId();
        }

        return null;
    }

    public function setScholarship(?Scholarship $scholarship): self
    {
        $this->scholarship = $scholarship;

        return $this;
    }

    /**
     * Person entity properties
     */

    /**
     * @return string
     * @Groups({"public"})
     */
    public function getName(): string
    {
        return $this->person instanceof Person ? $this->person->getName() : '';
    }

    /**
     * @return string
     * @Groups({"public"})
     */
    public function getEmail(): string
    {
        return $this->person instanceof Person ? $this->person->getEmail() : '';
    }

    /**
     * @return string
     * @Groups({"public"})
     */
    public function getAvatar(): string
    {
        return $this->person instanceof Person ? $this->person->getAvatar() : '';
    }

    /**
     * @return float
     * @Groups({"public"})
     */
    public function getRate(): float
    {
        return $this->person instanceof Person ? $this->person->getRate() : 0;
    }

    /**
     * @return Collection|null
     * @Groups({"public"})
     */
    public function getExperience(): ?Collection
    {
        return $this->experience;
    }

    /**
     * @param Collection|null $experiences
     * @return Employee
     * @Groups({"fillable"})
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
        if (!$this->experience->contains($experience)) {
            $this->experience->add($experience);
            $experience->setEmployee($this);
        }

        return $this;
    }

    /**
     * @param Profession $profession
     * @param int $years
     * @return Employee
     */
    public function addProfessionalExperience(Profession $profession, int $years): Employee
    {
        $newExperience = new Experience();
        $newExperience->setProfession($profession);
        $newExperience->setYears($years);

        return $this->addExperience($newExperience);
    }

    /**
     * @return Collection|Location[]
     */
    public function getWorkingLocations(): Collection
    {
        return $this->workingLocations;
    }

    /**
     * @return Collection|int[]
     * @Groups({"public"})
     */
    public function getWorkingLocationIds(): Collection
    {
        return $this->workingLocations->map(function ($workingLocation) {
            return $workingLocation->getId();
        });
    }

    /**
     * @param Location $location
     * @return Employee
     */
    public function addWorkingLocation(Location $location): Employee
    {
        if (!$this->workingLocations->contains($location)) {
            $this->workingLocations->add($location);
        }

        return $this;
    }

    /**
     * @param Location $location
     * @return Employee
     */
    public function removeWorkingLocation(Location $location): Employee
    {
        if ($this->workingLocations->contains($location)) {
            $this->workingLocations->removeElement($location);
        }

        return $this;
    }

    /**
     * @return array|Collection|PersonLanguage[]
     * @Groups({"public"})
     */
    public function getLanguages(): Collection
    {
        return $this->person instanceof Person ? $this->person->getLanguages() : [];
    }
}
