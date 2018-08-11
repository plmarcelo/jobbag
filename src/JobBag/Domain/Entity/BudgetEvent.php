<?php

namespace JobBag\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BudgetEvent
 *
 * @ORM\Table(name="budget_event", indexes={@ORM\Index(name="idx_budget_event_status_id", columns={"budget_status_id"}), @ORM\Index(name="idx_budget_event_budget_id", columns={"budget_id"})})
 * @ORM\Entity
 */
class BudgetEvent
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
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \Budget
     *
     * @ORM\ManyToOne(targetEntity="Budget")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="budget_id", referencedColumnName="id")
     * })
     */
    private $budget;

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

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getBudget(): ?Budget
    {
        return $this->budget;
    }

    public function setBudget(?Budget $budget): self
    {
        $this->budget = $budget;

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
