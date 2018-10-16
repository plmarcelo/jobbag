<?php

namespace JobBag\Domain\Repository;

use JobBag\Domain\Entity\ScholarshipTranslation;

interface ScholarshipTranslationRepository
{
    /**
     * @param string $languageId
     * @return ScholarshipTranslation[]
     */
    public function findByLanguageId($languageId): array;
}
