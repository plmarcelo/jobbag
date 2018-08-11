<?php

namespace JobBag\Domain\Repository;

use JobBag\Domain\Entity\Country;

interface CountryRepository
{
    /**
     * @return Country[]
     */
    public function findAll();
}
