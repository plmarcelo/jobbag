<?php

namespace JobBag\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Id;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * ProvinceTranslation
 *
 * @ORM\Table(name="province_language")
 * @ORM\Entity
 */
class ProvinceTranslation
{
    /**
     * @var Province
     *
     * @Id @ORM\ManyToOne(targetEntity="Province")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="province_id", referencedColumnName="id")
     * })
     */
    private $province;

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
     * @return Province|null
     */
    public function getProvince(): ?Province
    {
        return $this->province;
    }

    /**
     * @param Province|null $province
     * @return ProvinceTranslation
     */
    public function setProvince(?Province $province): self
    {
        $this->province = $province;

        return $this;
    }

    /**
     * @Groups("province")
     * @return string
     */
    public function getId(): string
    {
        return $this->province->getId();
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
     * @return ProvinceTranslation
     */
    public function setLanguage(?Language $language): self
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @Groups("province")
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
