<?php

namespace JobBag\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Id;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * ScholarshipTranslation
 *
 * @ORM\Table(name="scholarship_language")
 * @ORM\Entity
 */
class ScholarshipTranslation
{
    /**
     * @var Scholarship
     *
     * @Id @ORM\ManyToOne(targetEntity="Scholarship")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="scholarship_id", referencedColumnName="id")
     * })
     */
    private $scholarship;

    /**
     * @var Language
     *
     * @Id @ORM\ManyToOne(targetEntity="Language")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="language_id", referencedColumnName="id")
     * })
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @return Scholarship|null
     */
    public function getScholarship(): ?Scholarship
    {
        return $this->scholarship;
    }

    /**
     * @param Scholarship|null $scholarship
     * @return ScholarshipTranslation
     */
    public function setScholarship(?Scholarship $scholarship): self
    {
        $this->scholarship = $scholarship;

        return $this;
    }

    /**
     * @Groups("scholarship")
     * @return string
     */
    public function getId(): ?string
    {
        return $this->scholarship->getId();
    }

    /**
     * @return Language|null
     */
    public function getLanguage(): ?Language
    {
        return $this->language;
    }

    /**
     * @param Language|null $language
     * @return ScholarshipTranslation
     */
    public function setLanguage(?Language $language): self
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @Groups("scholarship")
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
}
