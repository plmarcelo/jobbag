<?php

namespace JobBag\Domain\Repository;

use JobBag\Domain\Entity\ScholarshipTranslation;

interface ScholarshipTranslationRepository
{
    /**
     * @param string|null $languageId
     * @return ScholarshipTranslation[]
     */
    public function findByLanguageId($languageId = null);
}
