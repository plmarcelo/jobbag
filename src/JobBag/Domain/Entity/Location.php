<?php

namespace JobBag\Domain\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Location
 *
 * @ORM\Table(name="location", indexes={@ORM\Index(name="idx_location_parent_id", columns={"parent_id"})})
 * @ORM\Entity
 */
class Location
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
     * @var Location
     *
     * @ORM\ManyToOne(targetEntity="Location")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     */
    private $parent;

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
     * Constructor
     */
    public function __construct()
    {
        $this->language = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Location
     * @Groups({"public"})
     */
    public function setId(int $id): Location
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
     * @return Location
     */
    public function setName(string $name): Location
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Location
     */
    public function getParent(): Location
    {
        return $this->parent;
    }

    /**
     * @param Location|null $parent
     * @return Location
     */
    public function setParent(?Location $parent = null): Location
    {
        $this->parent = $parent;

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
     * @return Location
     */
    public function addLanguage(Language $language): Location
    {
        if (!$this->language->contains($language)) {
            $this->language[] = $language;
        }

        return $this;
    }

    /**
     * @param Language $language
     * @return Location
     */
    public function removeLanguage(Language $language): Location
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
     * @return Location
     */
    public function setIsoCode(string $isoCode): Location
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
     * @return Location
     */
    public function setActive(bool $active): Location
    {
        $this->active = $active;

        return $this;
    }
}
