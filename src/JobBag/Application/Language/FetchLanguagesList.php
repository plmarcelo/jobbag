<?php

namespace JobBag\Application\Language;

use JobBag\Domain\Entity\Language;
use JobBag\Domain\Repository\LanguageRepository;

class FetchLanguagesList
{
    /**
     * @var LanguageRepository
     */
    private $languageRepository;

    /**
     * FetchLanguagesList constructor.
     * @param LanguageRepository $languageRepository
     */
    public function __construct(LanguageRepository $languageRepository)
    {
        $this->languageRepository = $languageRepository;
    }

    /**
     * @return Language[]
     */
    public function fetch()
    {
        return $this->languageRepository->findAll();
    }
}
