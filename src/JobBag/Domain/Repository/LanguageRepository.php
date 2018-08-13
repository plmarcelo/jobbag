<?php

namespace JobBag\Domain\Repository;

use JobBag\Domain\Entity\Language;

interface LanguageRepository
{
    /**
     * @return Language[]
     */
    public function findAll();
}
