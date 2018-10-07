<?php

namespace JobBag\Controller\Pub;

use JobBag\Application\Scholarship\FetchScholarshipsList;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ScholarshipController
 * @package JobBag\Controller
 * @Route("/scholarships")
 */
class ScholarshipController extends AbstractController
{
    /**
     * @var FetchScholarshipsList
     */
    private $scholarshipsFetcher;

    /**
     * CountryController constructor.
     * @param FetchScholarshipsList $scholarshipsFetcher
     */
    public function __construct(FetchScholarshipsList $scholarshipsFetcher)
    {
        $this->scholarshipsFetcher = $scholarshipsFetcher;
    }

    /**
     * @Route("/", name="scholarship_list", methods={"GET"})
     */
    public function index($_locale = null)
    {
        $scholarships = $this->scholarshipsFetcher->fetch($_locale);

        return $this->json($scholarships, 200, [], ['groups' => ['scholarship']]);
    }
}
