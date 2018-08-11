<?php

namespace JobBag\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BudgetMessage
 *
 * @ORM\Table(name="budget_message", indexes={@ORM\Index(name="idx_message_sender_id", columns={"sender_id"}), @ORM\Index(name="idx_message_receiver_id", columns={"receiver_id"}), @ORM\Index(name="idx_message_message_status_id", columns={"message_status_id"})})
 * @ORM\Entity
 */
class BudgetMessage
{
    /**
     * @var int
     *
     * @ORM\Column(name="budget_id", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $budgetId;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=100, nullable=false)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="string", length=1500, nullable=false)
     */
    private $body;

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="sent_at", type="datetime", nullable=true)
     */
    private $sentAt;

    /**
     * @var \Budget
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Budget")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="receiver_id", referencedColumnName="id")
     * })
     */
    private $receiver;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sender_id", referencedColumnName="id")
     * })
     */
    private $sender;

    /**
     * @var \MessageStatus
     *
     * @ORM\ManyToOne(targetEntity="MessageStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="message_status_id", referencedColumnName="id")
     * })
     */
    private $messageStatus;

    public function getBudgetId(): ?int
    {
        return $this->budgetId;
    }

    public function setBudgetId(int $budgetId): self
    {
        $this->budgetId = $budgetId;

        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(string $body): self
    {
        $this->body = $body;

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

    public function getSentAt(): ?\DateTimeInterface
    {
        return $this->sentAt;
    }

    public function setSentAt(?\DateTimeInterface $sentAt): self
    {
        $this->sentAt = $sentAt;

        return $this;
    }

    public function getId(): ?Budget
    {
        return $this->id;
    }

    public function setId(?Budget $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getReceiver(): ?User
    {
        return $this->receiver;
    }

    public function setReceiver(?User $receiver): self
    {
        $this->receiver = $receiver;

        return $this;
    }

    public function getSender(): ?User
    {
        return $this->sender;
    }

    public function setSender(?User $sender): self
    {
        $this->sender = $sender;

        return $this;
    }

    public function getMessageStatus(): ?MessageStatus
    {
        return $this->messageStatus;
    }

    public function setMessageStatus(?MessageStatus $messageStatus): self
    {
        $this->messageStatus = $messageStatus;

        return $this;
    }


}
