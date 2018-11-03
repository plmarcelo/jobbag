<?php

namespace JobBag\Domain\Entity;

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
}
