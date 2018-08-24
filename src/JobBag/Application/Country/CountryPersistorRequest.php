<?php

namespace JobBag\Application\Country;

class CountryPersistorRequest
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return CountryPersistorRequest
     */
    public function setId(string $id): CountryPersistorRequest
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return CountryPersistorRequest
     */
    public function setName(string $name): CountryPersistorRequest
    {
        $this->name = $name;

        return $this;
    }
}
