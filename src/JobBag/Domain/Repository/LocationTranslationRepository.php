<?php

namespace JobBag\Domain\Repository;

use JobBag\Domain\Entity\LocationTranslation;

interface LocationTranslationRepository
{
    /**
     * @param string $languageId
     * @param int $parentId
     * @return LocationTranslation[]
     */
    public function findByParentId($languageId, $parentId);

    /**
     * @param string $languageId
     * @return LocationTranslation[]
     */
    public function findRoots($languageId);
}
