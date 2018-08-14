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

    /**
     * @param string|null $id
     * @param string|null $languageId
     * @return CountryTranslation|null
     */
    public function findOneByIdAndLanguageId($id, $languageId = null);
}
