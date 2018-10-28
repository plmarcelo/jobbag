<?php

namespace JobBag\Domain\Repository;

use Doctrine\Common\Collections\ArrayCollection;
use JobBag\Domain\Entity\ProfessionTranslation;

interface ProfessionTranslationRepository
{
    /**
     * @param string $languageId
     * @param int $parentId
     * @return ArrayCollection|ProfessionTranslation[]
     */
    public function findByParentId(int $parentId, string $languageId);

    /**
     * @param int $countryId
     * @param string $languageId
     * @return ArrayCollection|ProfessionTranslation[]
     */
    public function findByCountryId(int $countryId, string $languageId);

    /**
     * @param int $id
     * @param string $languageId
     * @return ProfessionTranslation
     */
    public function findById(int $id, string $languageId): ProfessionTranslation;
}
