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
     * FetchScholarshipsList constructor.
     * @param ScholarshipTranslationRepository $scholarshipRepository
     */
    public function __construct(ScholarshipTranslationRepository $scholarshipRepository)
    {
        $this->scholarshipRepository = $scholarshipRepository;
    }

    /**
     * @param string|null $language
     * @return \JobBag\Domain\Entity\ScholarshipTranslation[]
     */
    public function fetch($language = null)
    {
        return $this->scholarshipRepository->findByLanguageId($language);
    }
}
