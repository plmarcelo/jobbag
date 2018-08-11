<?php

namespace JobBag\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Budget
 *
 * @ORM\Table(name="budget", indexes={@ORM\Index(name="idx_budget_project_id", columns={"project_id"}), @ORM\Index(name="idx_budget_employee_id", columns={"employee_id"}), @ORM\Index(name="idx_budget_status_id", columns={"budget_status_id"})})
 * @ORM\Entity
 */
class Budget
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
     * @var string|null
     *
     * @ORM\Column(name="estimated_amount", type="decimal", precision=9, scale=2, nullable=true)
     */
    private $estimatedAmount;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="estimated_end_date", type="date", nullable=true)
     */
    private $estimatedEndDate;

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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="employee_id", referencedColumnName="id")
     * })
     */
    private $employee;

    /**
     * @var \Project
     *
     * @ORM\ManyToOne(targetEntity="Project")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     * })
     */
    private $project;

    /**
     * @var \BudgetStatus
     *
     * @ORM\ManyToOne(targetEntity="BudgetStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="budget_status_id", referencedColumnName="id")
     * })
     */
    private $budgetStatus;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEstimatedAmount()
    {
        return $this->estimatedAmount;
    }

    public function setEstimatedAmount($estimatedAmount): self
    {
        $this->estimatedAmount = $estimatedAmount;

        return $this;
    }

    public function getEstimatedEndDate(): ?\DateTimeInterface
    {
        return $this->estimatedEndDate;
    }

    public function setEstimatedEndDate(?\DateTimeInterface $estimatedEndDate): self
    {
        $this->estimatedEndDate = $estimatedEndDate;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getEmployee(): ?User
    {
        return $this->employee;
    }

    public function setEmployee(?User $employee): self
    {
        $this->employee = $employee;

        return $this;
    }

    public function getProject(): ?Project
    {
        return $this->project;
    }

    public function setProject(?Project $project): self
    {
        $this->project = $project;

        return $this;
    }

    public function getBudgetStatus(): ?BudgetStatus
    {
        return $this->budgetStatus;
    }

    public function setBudgetStatus(?BudgetStatus $budgetStatus): self
    {
        $this->budgetStatus = $budgetStatus;

        return $this;
    }


}
