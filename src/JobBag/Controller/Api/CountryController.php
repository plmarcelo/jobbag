<?php

namespace JobBag\Controller\Api;

use JobBag\Application\Country\FetchCountriesList;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CountryController
 * @package JobBag\Controller
 * @Route("/countries")
 */
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
     * @Route("/", name="country_list", methods={"GET"})
     */
    public function list($_locale)
    {
        $countries = $this->countriesFetcher->fetch($_locale);

        return $this->json($countries, 200, [], ['groups' => ['country']]);
    }

    /**
     * @Route("/{id}", name="country", methods={"GET"})
     */
    public function show($id, $_locale)
    {
        $country = $this->countriesFetcher->fetchById($id, $_locale);

        return $this->json($country, 200, [], ['groups' => ['country']]);
    }
}
