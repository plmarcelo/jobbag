<?php

namespace JobBag\Application\City;

use JobBag\Domain\Entity\CityTranslation;
use JobBag\Domain\Repository\CityTranslationRepository;

class FetchCitiesList
{
    /**
     * @var CityTranslationRepository
     */
    private $cityRepository;

    /**
     * FetchCitiesList constructor.
     * @param CityTranslationRepository $cityRepository
     */
    public function __construct(CityTranslationRepository $cityRepository)
    {
        $this->cityRepository = $cityRepository;
    }

    /**
     * @return CityTranslation[]
     */
    public function fetch($language = null)
    {
        return $this->cityRepository->findByLanguageId($language);
    }
}
