<?php

namespace JobBag\Domain\Repository;

use Doctrine\Common\Collections\ArrayCollection;
use JobBag\Domain\Entity\LocationTranslation;

interface LocationTranslationRepository
{
    /**
     * @param int $id
     * @param string $languageId
     * @return LocationTranslation
     */
    public function findById(int $id, string $languageId): LocationTranslation;

    /**
     * @param int $parentId
     * @param string $languageId
     * @return ArrayCollection|LocationTranslation[]
     */
    public function findByParentId($parentId, $languageId);

    /**
     * @param string $languageId
     * @return ArrayCollection|LocationTranslation[]
     */
    public function findRoots($languageId);
}
