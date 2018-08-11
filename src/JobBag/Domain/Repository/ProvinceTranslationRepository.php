<?php

namespace JobBag\Domain\Repository;

use JobBag\Domain\Entity\ProvinceTranslation;

interface ProvinceTranslationRepository
{
    /**
     * @param string|null $languageId
     * @return ProvinceTranslation[]
     */
    public function findByLanguageId($languageId = null);
}
