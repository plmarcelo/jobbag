<?php

namespace JobBag\Controller\Pub;

use JobBag\Application\Location\FetchLocationsList;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
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
     * @Route("", name="list_locations", methods={"GET"})
     * @param Request $request
     * @param string|null $_locale
     * @return JsonResponse
     */
    public function list(Request $request, $_locale = null): JsonResponse
    {
        $locations = $this->locationsFetcher->fetchByParentId($request->query->get('parentId', null), $_locale);

        return $this->json($locations, 200, [], ['groups' => ['location']]);
    }

    /**
     * @Route("/{id}", name="show_location", methods={"GET"})
     * @param int|null $id
     * @param string|null $_locale
     * @return JsonResponse
     */
    public function index($id = null, $_locale = null): JsonResponse
    {
        $locations = $this->locationsFetcher->fetch($id, $_locale);

        return $this->json($locations, 200, [], ['groups' => ['location']]);
    }
}
