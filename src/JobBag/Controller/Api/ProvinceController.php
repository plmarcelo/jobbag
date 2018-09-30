<?php

namespace JobBag\Controller\Api;

use JobBag\Application\Province\FetchProvincesList;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ProvinceController
 * @package JobBag\Controller
 * @Route("/provinces")
 */
class ProvinceController extends AbstractController
{
    /**
     * @var FetchProvincesList
     */
    private $provincesFetcher;

    /**
     * CountryController constructor.
     * @param FetchProvincesList $provincesFetcher
     */
    public function __construct(FetchProvincesList $provincesFetcher)
    {
        $this->provincesFetcher = $provincesFetcher;
    }

    /**
     * @Route("/", name="province_list", methods={"GET"})
     * @param string $_locale
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index($_locale)
    {
        $provinces = $this->provincesFetcher->fetch($_locale);

        return $this->json($provinces, 200, [], ['groups' => ['province']]);
    }
}
