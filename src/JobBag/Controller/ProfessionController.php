<?php

namespace JobBag\Controller;

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
     * @Route("/", name="profession_list", methods={"GET"})
     */
    public function index($_locale = null)
    {
        $professions = $this->professionsFetcher->fetch($_locale);

        return $this->json($professions, 200, [], ['groups' => ['profession']]);
    }
}
