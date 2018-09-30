<?php

namespace JobBag\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Id;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * CityTranslation
 *
 * @ORM\Table(name="city_language")
 * @ORM\Entity
 */
class CityTranslation
{
    /**
     * @var City
     *
     * @Id @ORM\ManyToOne(targetEntity="City")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     * })
     */
    private $city;

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
     * @return City|null
     */
    public function getCity(): ?City
    {
        return $this->city;
    }

    /**
     * @param City|null $city
     * @return CityTranslation
     */
    public function setCity(?City $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @Groups("city")
     * @return string
     */
    public function getId(): string
    {
        return $this->city->getId();
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
     * @return CityTranslation
     */
    public function setLanguage(?Language $language): self
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @Groups("city")
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
