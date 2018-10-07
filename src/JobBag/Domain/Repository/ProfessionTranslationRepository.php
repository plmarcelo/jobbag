<?php

namespace JobBag\Domain\Repository;

use JobBag\Domain\Entity\ProfessionTranslation;

interface ProfessionTranslationRepository
{
    /**
     * @param string $languageId
     * @param int $parentId
     * @return ProfessionTranslation[]
     */
    public function findByParentId($languageId, $parentId);

    /**
     * @param string $languageId
     * @return ProfessionTranslation[]
     */
    public function findRoots($languageId);
}
