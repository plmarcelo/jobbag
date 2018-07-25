<?php

namespace JobBag\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="JobBag\Domain\Repository\UserRepository")
 * @ORM\HasLifecycleCallbacks
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=60, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $password;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $lastLogin;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active = false;

    /**
     * @ORM\Column(type="boolean")
     */
    private $deleted = false;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @return mixed
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @ORM\PrePersist
     */
    public function onPrePersist(): void
    {
        $this->createdAt = new \DateTime('now');
        $this->onPreUpdate();
    }

    /**
     * @ORM\PreUpdate
     */
    public function onPreUpdate(): void
    {
        $this->updatedAt = new \DateTime('now');
    }

    /**
     * @param string $username
     * @return User
     */
    public function setUsername($username): User
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @param mixed $password
     * @return User
     */
    public function setPassword($password): User
    {
        $this->password = $password;

        return $this;
    }
}
