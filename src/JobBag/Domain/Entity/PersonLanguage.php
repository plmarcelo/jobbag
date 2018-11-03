<?php

namespace JobBag\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * PersonLanguage
 *
 * @ORM\Table(name="person_language")
 * @ORM\Entity
 */
class PersonLanguage
{
    /**
     * @var Person
     *
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="Person")
     * @ORM\JoinColumn(name="person_id", referencedColumnName="id", nullable=false)
     */
    private $person;

    /**
     * @var Language
     *
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="Language")
     * @ORM\JoinColumn(name="language_id", referencedColumnName="id", nullable=false)
     */
    private $language;

    /**
     * @var bool
     *
     * @ORM\Column(name="mother_tongue", type="boolean", nullable=false)
     */
    private $motherTongue;

    /**
     * @return Person
     */
    public function getPerson(): Person
    {
        return $this->person;
    }

    /**
     * @param Person $person
     * @return PersonLanguage
     */
    public function setPerson(Person $person): PersonLanguage
    {
        $this->person = $person;

        return $this;
    }

    /**
     * @return Language
     */
    public function getLanguage(): Language
    {
        return $this->language;
    }

    /**
     * @param Language $language
     * @return PersonLanguage
     */
    public function setLanguage(Language $language): PersonLanguage
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @return string
     * @Groups({"public"})
     */
    public function getId(): string
    {
        return $this->language instanceof Language ? $this->language->getId() : null;
    }

    /**
     * @return bool
     * @Groups({"public"})
     */
    public function isMotherTongue(): bool
    {
        return $this->motherTongue;
    }

    /**
     * @param int $motherTongue
     * @return PersonLanguage
     * @Groups({"public"})
     */
    public function setMotherTongue($motherTongue): PersonLanguage
    {
        $this->motherTongue = $motherTongue;

        return $this;
    }
}
