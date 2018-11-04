<?php

namespace JobBag\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Project
 *
 * @ORM\Table(name="project", indexes={@ORM\Index(name="idx_project_employer_id", columns={"employer_id"}), @ORM\Index(name="idx_project_profession_id", columns={"profession_id"}), @ORM\Index(name="idx_project_employee_id", columns={"employee_id"}), @ORM\Index(name="idx_project_project_status_id", columns={"project_status_id"})})
 * @ORM\Entity
 */
class Project
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1500, nullable=false)
     */
    private $description;

    /**
     * @var float|null
     *
     * @ORM\Column(name="price", type="decimal", precision=9, scale=2, nullable=true, options={"default"=0})
     */
    private $price = 0;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="employer_id", referencedColumnName="id")
     */
    private $employer;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="employee_id", referencedColumnName="id")
     */
    private $employee;

    /**
     * @var Profession
     *
     * @ORM\ManyToOne(targetEntity="Profession")
     * @ORM\JoinColumn(name="profession_id", referencedColumnName="id")
     */
    private $profession;

    /**
     * @var ProjectStatus
     *
     * @ORM\ManyToOne(targetEntity="ProjectStatus")
     * @ORM\JoinColumn(name="project_status_id", referencedColumnName="id")
     */
    private $projectStatus;

    /**
     * @return int|null
     * @Groups({"public"})
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return null|string
     * @Groups({"public"})
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): Project
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return null|string
     * @Groups({"public"})
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): Project
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return null|float
     * @Groups({"public"})
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice($price): Project
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     * @Groups({"public"})
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): Project
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     * @Groups({"public"})
     */
    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): Project
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getEmployer(): ?User
    {
        return $this->employer;
    }

    /**
     * @param User|UserInterface|null $employer
     * @return Project
     */
    public function setEmployer(?User $employer): Project
    {
        $this->employer = $employer;

        return $this;
    }

    public function getEmployee(): ?User
    {
        return $this->employee;
    }

    /**
     * @param User|null $employee
     * @return Project
     */
    public function setEmployee(?User $employee): Project
    {
        $this->employee = $employee;

        return $this;
    }

    public function getProfession(): ?Profession
    {
        return $this->profession;
    }

    /**
     * @param Profession|null $profession
     * @return Project
     */
    public function setProfession(?Profession $profession): Project
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * @return ProjectStatus|null
     */
    public function getProjectStatus(): ?ProjectStatus
    {
        return $this->projectStatus;
    }

    /**
     * @param ProjectStatus|null $projectStatus
     * @return Project
     */
    public function setProjectStatus(?ProjectStatus $projectStatus): Project
    {
        $this->projectStatus = $projectStatus;

        return $this;
    }

    /**
     * @return null|string
     * @Groups({"public"})
     */
    public function getStatus(): ?string
    {
        return $this->projectStatus instanceof ProjectStatus ? $this->projectStatus->getDescription() : '';
    }
}
