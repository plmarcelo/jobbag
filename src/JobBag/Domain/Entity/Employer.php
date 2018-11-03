<?php

namespace JobBag\Domain\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Employer
 *
 * @ORM\Table(name="employer", uniqueConstraints={@ORM\UniqueConstraint(name="uk_person", columns={"person_id"})})
 * @ORM\Entity(repositoryClass="JobBag\Domain\Repository\EmployerRepository")
 */
class Employer
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
     * @var float
     *
     * @ORM\Column(name="rate", type="decimal", precision=3, scale=1, nullable=false, options={"default"="0"})
     */
    private $rate = '0';

    /**
     * @return int|null
     * @Groups({"public"})
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return float
     * @Groups({"public"})
     */
    public function getRate(): float
    {
        return $this->rate;
    }

    /**
     * @param $rate
     * @return Employer
     */
    public function setRate($rate): Employer
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * @return Person|null
     */
    public function getPerson(): ?Person
    {
        return $this->person;
    }

    /**
     * @param Person|null $person
     * @return Employer
     */
    public function setPerson(?Person $person): Employer
    {
        $this->person = $person;

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
     * @return Collection|PersonLanguage[]
     * @Groups({"public"})
     */
    public function getLanguages(): ?Collection
    {
        return $this->person instanceof Person ? $this->person->getLanguages() : null;
    }
}
