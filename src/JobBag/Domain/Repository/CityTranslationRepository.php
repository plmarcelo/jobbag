<?php

namespace JobBag\Domain\Repository;

use JobBag\Domain\Entity\CityTranslation;

interface CityTranslationRepository
{
    /**
     * @param string|null $languageId
     * @return CityTranslation[]
     */
    public function findByLanguageId($languageId = null);
}
