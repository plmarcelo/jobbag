<?php

namespace JobBag\Application\Profession;

use JobBag\Domain\Entity\Profession;
use JobBag\Domain\Entity\ProfessionTranslation;
use JobBag\Domain\Repository\ProfessionRepository;
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
     * @param string|null $languageId
     * @return ProfessionTranslation[]
     */
    public function fetch($languageId = null, $id = null)
    {
        $languageId = $languageId ?: $this->defaultLocale;

        if ($id === null) {
            return $this->professionRepository->findRoots($languageId);
        }

        return $this->professionRepository->findByParentId($languageId, $id);
    }
}
