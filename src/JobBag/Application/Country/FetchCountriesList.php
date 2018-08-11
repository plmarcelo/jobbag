<?php

namespace JobBag\Application\Country;

use JobBag\Domain\Entity\CountryTranslation;
use JobBag\Domain\Repository\CountryTranslationRepository;

class FetchCountriesList
{
    /**
     * @var CountryTranslationRepository
     */
    private $countryRepository;

    /**
     * FetchCountriesList constructor.
     * @param CountryTranslationRepository $countryRepository
     */
    public function __construct(CountryTranslationRepository $countryRepository)
    {
        $this->countryRepository = $countryRepository;
    }

    /**
     * @return CountryTranslation[]
     */
    public function fetch($language = null)
    {
        return $this->countryRepository->findByLanguageId($language);
    }
}
