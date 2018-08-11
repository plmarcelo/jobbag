<?php

namespace JobBag\Application\Profession;

use JobBag\Domain\Entity\Profession;
use JobBag\Domain\Repository\ProfessionRepository;
use JobBag\Domain\Repository\ProfessionTranslationRepository;

class FetchProfessionsList
{
    /**
     * @var ProfessionTranslationRepository
     */
    private $professionRepository;

    /**
     * FetchProfessionsList constructor.
     * @param ProfessionTranslationRepository $professionRepository
     */
    public function __construct(ProfessionTranslationRepository $professionRepository)
    {
        $this->professionRepository = $professionRepository;
    }

    /**
     * @param string|null $language
     * @return \JobBag\Domain\Entity\ProfessionTranslation[]
     */
    public function fetch($language = null)
    {
        return $this->professionRepository->findByLanguageId($language);
    }
}
