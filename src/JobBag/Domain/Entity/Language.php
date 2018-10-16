<?php

namespace JobBag\Domain\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Language
 *
 * @ORM\Table(name="language")
 * @ORM\Entity
 */
class Language
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=2, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="BudgetStatus", mappedBy="language")
     */
    private $budgetStatus;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="MessageStatus", mappedBy="language")
     */
    private $messageStatus;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Person", mappedBy="languages")
     */
    private $user;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Profession", mappedBy="language")
     */
    private $profession;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ProjectStatus", mappedBy="language")
     */
    private $projectStatus;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Location", mappedBy="language")
     */
    private $location;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="QuizAnswer", mappedBy="language")
     */
    private $quizAnswer;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Quiz", mappedBy="language")
     */
    private $quiz;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="QuizQuestion", mappedBy="language")
     */
    private $quizQuestion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="RateableDetail", mappedBy="language")
     */
    private $rateableDetail;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Scholarship", mappedBy="language")
     */
    private $scholarship;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->budgetStatus = new \Doctrine\Common\Collections\ArrayCollection();
        $this->messageStatus = new \Doctrine\Common\Collections\ArrayCollection();
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
        $this->profession = new \Doctrine\Common\Collections\ArrayCollection();
        $this->projectStatus = new \Doctrine\Common\Collections\ArrayCollection();
        $this->location = new \Doctrine\Common\Collections\ArrayCollection();
        $this->quizAnswer = new \Doctrine\Common\Collections\ArrayCollection();
        $this->quiz = new \Doctrine\Common\Collections\ArrayCollection();
        $this->quizQuestion = new \Doctrine\Common\Collections\ArrayCollection();
        $this->rateableDetail = new \Doctrine\Common\Collections\ArrayCollection();
        $this->scholarship = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @Groups("public")
     * @return null|string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @Groups("public")
     * @return null|string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|BudgetStatus[]
     */
    public function getBudgetStatus(): Collection
    {
        return $this->budgetStatus;
    }

    public function addBudgetStatus(BudgetStatus $budgetStatus): self
    {
        if (!$this->budgetStatus->contains($budgetStatus)) {
            $this->budgetStatus[] = $budgetStatus;
            $budgetStatus->addLanguage($this);
        }

        return $this;
    }

    public function removeBudgetStatus(BudgetStatus $budgetStatus): self
    {
        if ($this->budgetStatus->contains($budgetStatus)) {
            $this->budgetStatus->removeElement($budgetStatus);
            $budgetStatus->removeLanguage($this);
        }

        return $this;
    }

    /**
     * @return Collection|MessageStatus[]
     */
    public function getMessageStatus(): Collection
    {
        return $this->messageStatus;
    }

    public function addMessageStatus(MessageStatus $messageStatus): self
    {
        if (!$this->messageStatus->contains($messageStatus)) {
            $this->messageStatus[] = $messageStatus;
            $messageStatus->addLanguage($this);
        }

        return $this;
    }

    public function removeMessageStatus(MessageStatus $messageStatus): self
    {
        if ($this->messageStatus->contains($messageStatus)) {
            $this->messageStatus->removeElement($messageStatus);
            $messageStatus->removeLanguage($this);
        }

        return $this;
    }

    /**
     * @return Collection|Person[]
     */
    public function getUser(): Collection
    {
        return $this->user;
    }

    public function addUser(Person $user): self
    {
        if (!$this->user->contains($user)) {
            $this->user[] = $user;
            $user->addLanguage($this);
        }

        return $this;
    }

    public function removeUser(Person $user): self
    {
        if ($this->user->contains($user)) {
            $this->user->removeElement($user);
            $user->removeLanguage($this);
        }

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
            $profession->addLanguage($this);
        }

        return $this;
    }

    public function removeProfession(Profession $profession): self
    {
        if ($this->profession->contains($profession)) {
            $this->profession->removeElement($profession);
            $profession->removeLanguage($this);
        }

        return $this;
    }

    /**
     * @return Collection|ProjectStatus[]
     */
    public function getProjectStatus(): Collection
    {
        return $this->projectStatus;
    }

    public function addProjectStatus(ProjectStatus $projectStatus): self
    {
        if (!$this->projectStatus->contains($projectStatus)) {
            $this->projectStatus[] = $projectStatus;
            $projectStatus->addLanguage($this);
        }

        return $this;
    }

    public function removeProjectStatus(ProjectStatus $projectStatus): self
    {
        if ($this->projectStatus->contains($projectStatus)) {
            $this->projectStatus->removeElement($projectStatus);
            $projectStatus->removeLanguage($this);
        }

        return $this;
    }

    /**
     * @return Collection|Location[]
     */
    public function getLocation(): Collection
    {
        return $this->location;
    }

    public function addLocation(Location $location): self
    {
        if (!$this->location->contains($location)) {
            $this->location[] = $location;
            $location->addLanguage($this);
        }

        return $this;
    }

    public function removeLocation(Location $location): self
    {
        if ($this->location->contains($location)) {
            $this->location->removeElement($location);
            $location->removeLanguage($this);
        }

        return $this;
    }

    /**
     * @return Collection|QuizAnswer[]
     */
    public function getQuizAnswer(): Collection
    {
        return $this->quizAnswer;
    }

    public function addQuizAnswer(QuizAnswer $quizAnswer): self
    {
        if (!$this->quizAnswer->contains($quizAnswer)) {
            $this->quizAnswer[] = $quizAnswer;
            $quizAnswer->addLanguage($this);
        }

        return $this;
    }

    public function removeQuizAnswer(QuizAnswer $quizAnswer): self
    {
        if ($this->quizAnswer->contains($quizAnswer)) {
            $this->quizAnswer->removeElement($quizAnswer);
            $quizAnswer->removeLanguage($this);
        }

        return $this;
    }

    /**
     * @return Collection|Quiz[]
     */
    public function getQuiz(): Collection
    {
        return $this->quiz;
    }

    public function addQuiz(Quiz $quiz): self
    {
        if (!$this->quiz->contains($quiz)) {
            $this->quiz[] = $quiz;
            $quiz->addLanguage($this);
        }

        return $this;
    }

    public function removeQuiz(Quiz $quiz): self
    {
        if ($this->quiz->contains($quiz)) {
            $this->quiz->removeElement($quiz);
            $quiz->removeLanguage($this);
        }

        return $this;
    }

    /**
     * @return Collection|QuizQuestion[]
     */
    public function getQuizQuestion(): Collection
    {
        return $this->quizQuestion;
    }

    public function addQuizQuestion(QuizQuestion $quizQuestion): self
    {
        if (!$this->quizQuestion->contains($quizQuestion)) {
            $this->quizQuestion[] = $quizQuestion;
            $quizQuestion->addLanguage($this);
        }

        return $this;
    }

    public function removeQuizQuestion(QuizQuestion $quizQuestion): self
    {
        if ($this->quizQuestion->contains($quizQuestion)) {
            $this->quizQuestion->removeElement($quizQuestion);
            $quizQuestion->removeLanguage($this);
        }

        return $this;
    }

    /**
     * @return Collection|RateableDetail[]
     */
    public function getRateableDetail(): Collection
    {
        return $this->rateableDetail;
    }

    public function addRateableDetail(RateableDetail $rateableDetail): self
    {
        if (!$this->rateableDetail->contains($rateableDetail)) {
            $this->rateableDetail[] = $rateableDetail;
            $rateableDetail->addLanguage($this);
        }

        return $this;
    }

    public function removeRateableDetail(RateableDetail $rateableDetail): self
    {
        if ($this->rateableDetail->contains($rateableDetail)) {
            $this->rateableDetail->removeElement($rateableDetail);
            $rateableDetail->removeLanguage($this);
        }

        return $this;
    }

    /**
     * @return Collection|Scholarship[]
     */
    public function getScholarship(): Collection
    {
        return $this->scholarship;
    }

    public function addScholarship(Scholarship $scholarship): self
    {
        if (!$this->scholarship->contains($scholarship)) {
            $this->scholarship[] = $scholarship;
            $scholarship->addLanguage($this);
        }

        return $this;
    }

    public function removeScholarship(Scholarship $scholarship): self
    {
        if ($this->scholarship->contains($scholarship)) {
            $this->scholarship->removeElement($scholarship);
            $scholarship->removeLanguage($this);
        }

        return $this;
    }

}
