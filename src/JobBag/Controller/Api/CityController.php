<?php

namespace JobBag\Controller\Api;

use JobBag\Application\City\FetchCitiesList;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CityController
 * @package JobBag\Controller
 * @Route("/cities")
 */
class CityController extends AbstractController
{
    /**
     * @var FetchCitiesList
     */
    private $citiesFetcher;

    /**
     * CountryController constructor.
     * @param FetchCitiesList $citiesFetcher
     */
    public function __construct(FetchCitiesList $citiesFetcher)
    {
        $this->citiesFetcher = $citiesFetcher;
    }

    /**
     * @Route("/", name="city_list", methods={"GET"})
     * @param string $_locale
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index($_locale)
    {
        $cities = $this->citiesFetcher->fetch($_locale);

        return $this->json($cities, 200, [], ['groups' => ['city']]);
    }
}
