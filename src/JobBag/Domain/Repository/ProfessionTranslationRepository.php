<?php

namespace JobBag\Domain\Repository;

use JobBag\Domain\Entity\ProfessionTranslation;

interface ProfessionTranslationRepository
{
    /**
     * @param string|null $languageId
     * @return ProfessionTranslation[]
     */
    public function findByLanguageId($languageId = null);
}
