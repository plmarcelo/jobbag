<?php

namespace JobBag\Application\Profession;

use Doctrine\Common\Collections\ArrayCollection;
use JobBag\Domain\Entity\ProfessionTranslation;
use JobBag\Domain\Repository\ProfessionTranslationRepository;

class FetchProfessionsList
{
    /**
     * @var ProfessionTranslationRepository
     */
    private $professionRepository;

    /**
     * @var string
     */
    private $defaultLocale;

    /**
     * FetchProfessionsList constructor.
     * @param ProfessionTranslationRepository $professionRepository
     * @param string $defaultLocale
     */
    public function __construct(ProfessionTranslationRepository $professionRepository, $defaultLocale)
    {
        $this->professionRepository = $professionRepository;
        $this->defaultLocale = $defaultLocale;
    }

    /**
     * @param int $id
     * @param string|null $languageId
     * @return ProfessionTranslation
     */
    public function fetch(int $id, string $languageId = null): ProfessionTranslation
    {
        $languageId = $languageId ?: $this->defaultLocale;

        return $this->professionRepository->findById($id, $languageId);
    }

    /**
     * @param int $countryId
     * @param string|null $languageId
     * @return ArrayCollection|ProfessionTranslation[]
     */
    public function fetchByCountryId(int $countryId, string $languageId = null): ArrayCollection
    {
        $languageId = $languageId ?: $this->defaultLocale;

        return $this->professionRepository->findByCountryId($countryId, $languageId);
    }

    /**
     * @param int $parentId
     * @param string|null $languageId
     * @return ArrayCollection|ProfessionTranslation[]
     */
    public function fetchByParentId(int $parentId, string $languageId = null)
    {
        $languageId = $languageId ?: $this->defaultLocale;

        return $this->professionRepository->findByParentId($parentId, $languageId);
    }
}
