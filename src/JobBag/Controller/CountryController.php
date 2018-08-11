<?php

namespace JobBag\Controller;

use JobBag\Application\Country\FetchCountriesList;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CountryController extends AbstractController
{
    /**
     * @var FetchCountriesList
     */
    private $countriesFetcher;

    /**
     * CountryController constructor.
     * @param FetchCountriesList $countriesFetcher
     */
    public function __construct(FetchCountriesList $countriesFetcher)
    {
        $this->countriesFetcher = $countriesFetcher;
    }

    /**
     * @Route("/country", name="country_list", methods={"GET"})
     */
    public function index($_locale)
    {
        $countries = $this->countriesFetcher->fetch($_locale);

        return $this->json($countries, 200, [], ['groups' => ['country']]);
    }
}
