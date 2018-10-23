<?php

namespace JobBag\Application\Location;

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
     * @param null|string $languageId
     * @param null|int $id
     * @return LocationTranslation[]
     */
    public function fetch($languageId = null, $id = null)
    {
        $languageId = $languageId ?: $this->defaultLocale;

        if ($id === null) {
            return $this->locationRepository->findRoots($languageId);
        }

        return $this->locationRepository->findByParentId($languageId, $id);
    }
}
