<?php

namespace JobBag\Controller\Pub;

use JobBag\Application\Language\FetchLanguagesList;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LanguageController extends AbstractController
{
    /**
     * @var FetchLanguagesList
     */
    private $languagesFetcher;

    /**
     * CountryController constructor.
     * @param FetchLanguagesList $languagesFetcher
     */
    public function __construct(FetchLanguagesList $languagesFetcher)
    {
        $this->languagesFetcher = $languagesFetcher;
    }

    /**
     * @Route("/language", name="language_list", methods={"GET"})
     */
    public function index()
    {
        $languages = $this->languagesFetcher->fetch();

        return $this->json($languages, 200, [], ['groups' => ['language']]);
    }
}
