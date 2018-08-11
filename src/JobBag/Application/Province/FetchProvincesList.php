<?php

namespace JobBag\Application\Province;

use JobBag\Domain\Entity\ProvinceTranslation;
use JobBag\Domain\Repository\ProvinceTranslationRepository;

class FetchProvincesList
{
    /**
     * @var ProvinceTranslationRepository
     */
    private $provinceRepository;

    /**
     * FetchProvincesList constructor.
     * @param ProvinceTranslationRepository $provinceRepository
     */
    public function __construct(ProvinceTranslationRepository $provinceRepository)
    {
        $this->provinceRepository = $provinceRepository;
    }

    /**
     * @return ProvinceTranslation[]
     */
    public function fetch($language = null)
    {
        return $this->provinceRepository->findByLanguageId($language);
    }
}
