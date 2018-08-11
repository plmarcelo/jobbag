<?php

namespace JobBag\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectQuizAnswer
 *
 * @ORM\Table(name="project_quiz_answer", uniqueConstraints={@ORM\UniqueConstraint(name="uk_project_quiz_question", columns={"project_id", "quiz_question_id"})}, indexes={@ORM\Index(name="idx_project_quiz_answer_quiz_question_id", columns={"quiz_question_id"}), @ORM\Index(name="idx_project_quiz_answer_project_id", columns={"project_id"})})
 * @ORM\Entity
 */
class ProjectQuizAnswer
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
     * @ORM\Column(name="value", type="string", length=250, nullable=false)
     */
    private $value;

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
     * @var \QuizQuestion
     *
     * @ORM\ManyToOne(targetEntity="QuizQuestion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quiz_question_id", referencedColumnName="id")
     * })
     */
    private $quizQuestion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

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

    public function getQuizQuestion(): ?QuizQuestion
    {
        return $this->quizQuestion;
    }

    public function setQuizQuestion(?QuizQuestion $quizQuestion): self
    {
        $this->quizQuestion = $quizQuestion;

        return $this;
    }


}
