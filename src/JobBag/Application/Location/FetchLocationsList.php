<?php

namespace JobBag\Application\Location;

use Doctrine\Common\Collections\ArrayCollection;
use JobBag\Domain\Entity\LocationTranslation;
use JobBag\Domain\Repository\LocationTranslationRepository;

class FetchLocationsList
{
    /**
     * @var LocationTranslationRepository
     */
    private $locationRepository;

    /**
     * @var string
     */
    private $defaultLocale;

    /**
     * FetchLocationsList constructor.
     * @param LocationTranslationRepository $locationRepository
     * @param string $defaultLocale
     */
    public function __construct(LocationTranslationRepository $locationRepository, $defaultLocale)
    {
        $this->locationRepository = $locationRepository;
        $this->defaultLocale = $defaultLocale;
    }

    /**
     * @param int $id
     * @param null|string $languageId
     * @return LocationTranslation
     */
    public function fetch(int $id, string $languageId = null): LocationTranslation
    {
        $languageId = $languageId ?: $this->defaultLocale;

        return $this->locationRepository->findById($id, $languageId);
    }

    /**
     * @param int $parentId
     * @param string|null $languageId
     * @return ArrayCollection|LocationTranslation[]
     */
    public function fetchByParentId($parentId, string $languageId = null)
    {
        $languageId = $languageId ?: $this->defaultLocale;

        if ($parentId === null) {
            return $this->locationRepository->findRoots($languageId);
        }

        return $this->locationRepository->findByParentId($parentId, $languageId);
    }
}
