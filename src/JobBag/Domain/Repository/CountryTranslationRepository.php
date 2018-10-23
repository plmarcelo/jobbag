<?php

namespace JobBag\Domain\Repository;

use Doctrine\Common\Collections\ArrayCollection;
use JobBag\Domain\Entity\CountryTranslation;

interface CountryTranslationRepository
{
    /**
     * @param string $languageId
     * @return ArrayCollection | CountryTranslation[]
     */
    public function findActive(string $languageId): ArrayCollection;
}
