<?php

namespace JobBag\Controller\Pub;

use JobBag\Application\Location\FetchLocationsList;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class LocationController
 * @package JobBag\Controller
 * @Route("/locations")
 */
class LocationController extends AbstractController
{
    /**
     * @var FetchLocationsList
     */
    private $locationsFetcher;

    /**
     * CountryController constructor.
     * @param FetchLocationsList $locationsFetcher
     */
    public function __construct(FetchLocationsList $locationsFetcher)
    {
        $this->locationsFetcher = $locationsFetcher;
    }

    /**
     * @Route("/{id}", name="location_list", methods={"GET"})
     * @param string $_locale
     * @param int|null $id
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index($_locale, $id = null)
    {
        $locations = $this->locationsFetcher->fetch($_locale, $id);

        return $this->json($locations, 200, [], ['groups' => ['location']]);
    }
}
