<?php

namespace JobBag\Application\Scholarship;

use JobBag\Domain\Repository\ScholarshipRepository;
use JobBag\Domain\Repository\ScholarshipTranslationRepository;

class FetchScholarshipsList
{
    /**
     * @var ScholarshipTranslationRepository
     */
    private $scholarshipRepository;

    /**
     * @var string
     */
    private $defaultLocale;

    /**
     * FetchScholarshipsList constructor.
     * @param ScholarshipTranslationRepository $scholarshipRepository
     */
    public function __construct(ScholarshipTranslationRepository $scholarshipRepository, $defaultLocale)
    {
        $this->scholarshipRepository = $scholarshipRepository;
        $this->defaultLocale = $defaultLocale;
    }

    /**
     * @param string|null $languageId
     * @return \JobBag\Domain\Entity\ScholarshipTranslation[]
     */
    public function fetch($languageId = null)
    {
        $languageId = $languageId ?: $this->defaultLocale;

        return $this->scholarshipRepository->findByLanguageId($languageId);
    }
}
