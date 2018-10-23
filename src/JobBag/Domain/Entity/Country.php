<?php

namespace JobBag\Domain\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Location
 *
 * @ORM\Table(name="location", indexes={@ORM\Index(name="idx_location_parent_id", columns={"parent_id"})})
 * @ORM\Entity
 */
class Country
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
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="parent_id", type="bigint", nullable=true, options={"unsigned"=true})
     */
    private $parentId;

    /**
     * @var string
     *
     * @ORM\Column(name="iso_code", type="string", length=10, nullable=true)
     */
    private $isoCode;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = 1;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Language", inversedBy="location")
     * @ORM\JoinTable(name="location_language",
     *   joinColumns={
     *     @ORM\JoinColumn(name="location_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="language_id", referencedColumnName="id")
     *   }
     * )
     */
    private $language;

    /**
     * @var ArrayCollection | Location[]
     * @ORM\OneToMany(targetEntity="Location", mappedBy="parent")
     */
    private $locations;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->language = new ArrayCollection();
        $this->locations = new ArrayCollection();
    }

    /**
     * @return null|int
     * @Groups({"public"})
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Country
     * @Groups({"public"})
     */
    public function setId(int $id): Country
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return null|string
     * @Groups({"public"})
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Country
     */
    public function setName(string $name): Country
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|Language[]
     */
    public function getLanguage(): Collection
    {
        return $this->language;
    }

    /**
     * @param Language $language
     * @return Country
     */
    public function addLanguage(Language $language): Country
    {
        if (!$this->language->contains($language)) {
            $this->language[] = $language;
        }

        return $this;
    }

    /**
     * @param Language $language
     * @return Country
     */
    public function removeLanguage(Language $language): Country
    {
        if ($this->language->contains($language)) {
            $this->language->removeElement($language);
        }

        return $this;
    }

    /**
     * @return string
     */
    public function getIsoCode(): string
    {
        return $this->isoCode;
    }

    /**
     * @param string $isoCode
     * @return Country
     */
    public function setIsoCode(string $isoCode): Country
    {
        $this->isoCode = $isoCode;

        return $this;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     * @return Country
     */
    public function setActive(bool $active): Country
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return ArrayCollection|Location[]
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * @param ArrayCollection|Location[] $locations
     * @return Country
     */
    public function setLocations($locations): Country
    {
        $this->locations = $locations;

        return $this;
    }

    /**
     * @return null | int
     */
    public function getParentId(): ?int
    {
        return $this->parentId;
    }

    /**
     * @param null | int $parentId
     */
    public function setParentId(?int $parentId): void
    {
        $this->parentId = $parentId;
    }
}
