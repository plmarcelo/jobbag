<?php

namespace JobBag\Domain\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Person
 *
 * @ORM\Table(name="person")
 * @ORM\Entity
 */
class Person
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=60, nullable=false)
     */
    private $name;

    /**
     * @var User
     *
     * @ORM\OneToOne(targetEntity="User", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var Collection
     *
     * @ORM\OneToMany(
     *     targetEntity="PersonLanguage",
     *     mappedBy="person",
     *     cascade={ "persist", "remove" },
     *     orphanRemoval=TRUE,
     *     fetch="EXTRA_LAZY"
     * )
     */
    private $languages;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->languages = new ArrayCollection();
    }

    /**
     * @return int
     * @Groups({"public"})
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     * @Groups({"public"})
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Person
     */
    public function setName(string $name): Person
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return User|null
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * @param User|null $user
     * @return Person
     */
    public function setUser(?User $user): Person
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @param Collection|PersonLanguage[] $languages
     * @return Person
     */
    public function setLanguages(Collection $languages): Person
    {
        $this->languages = $languages;

        return $this;
    }

    /**
     * @return Collection|PersonLanguage[]
     * @Groups({"public"})
     */
    public function getLanguages(): Collection
    {
        return $this->languages;
    }

    /**
     * @param PersonLanguage $language
     * @return Person
     */
    public function addLanguage(PersonLanguage $language): Person
    {
        if (!$this->languages->contains($language)) {
            $this->languages->add($language);
            $language->setPerson($this);
        }

        return $this;
    }

    /**
     * @param PersonLanguage $language
     * @return Person
     */
    public function removeLanguage(PersonLanguage $language): Person
    {
        if ($this->languages->contains($language)) {
            $this->languages->removeElement($language);
        }

        return $this;
    }

    /**
     * @param Language $language
     * @param bool $default
     * @return Person
     */
    public function addKnownLanguage(Language $language, bool $default = true): Person
    {
        $knownLanguage = new PersonLanguage();
        $knownLanguage->setLanguage($language);
        $knownLanguage->setMotherTongue($default);

        return $this->addLanguage($knownLanguage);
    }

    /**
     * @return null|string
     * @Groups({"public"})
     */
    public function getEmail(): ?string
    {
        return $this->user->getUsername();
    }

    /**
     * @return null|string
     * @Groups({"public"})
     */
    public function getAvatar(): ?string
    {
        return $this->user->getAvatar();
    }
}
