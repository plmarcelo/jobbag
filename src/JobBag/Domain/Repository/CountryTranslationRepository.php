<?php

namespace JobBag\Domain\Repository;

use JobBag\Domain\Entity\CountryTranslation;

interface CountryTranslationRepository
{
    /**
     * @param string|null $languageId
     * @return CountryTranslation[]
     */
    public function findByLanguageId($languageId = null);
}
