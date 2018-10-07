<?php

namespace JobBag\Controller\Pub;

use JobBag\Application\Profession\FetchProfessionsList;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ProfessionController
 * @package JobBag\Controller
 * @Route("/professions")
 */
class ProfessionController extends AbstractController
{
    /**
     * @var FetchProfessionsList
     */
    private $professionsFetcher;

    /**
     * CountryController constructor.
     * @param FetchProfessionsList $professionsFetcher
     */
    public function __construct(FetchProfessionsList $professionsFetcher)
    {
        $this->professionsFetcher = $professionsFetcher;
    }

    /**
     * @Route("/{id}", name="profession_list", methods={"GET"})
     * @param string|null $_locale
     * @param int|null $id
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index($_locale = null, $id = null)
    {
        $professions = $this->professionsFetcher->fetch($_locale, $id);

        return $this->json($professions, 200, [], ['groups' => ['profession']]);
    }
}
