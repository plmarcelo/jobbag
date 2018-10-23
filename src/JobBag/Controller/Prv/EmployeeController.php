<?php

namespace JobBag\Controller\Prv;

//use JobBag\Application\Employee\SearchByProfessionAndLocation;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class EmployeeController
 * @package JobBag\Controller
 * @Route("/employees")
 */
class EmployeeController extends AbstractController
{
//    /**
//     * @var SearchByProfessionAndLocation
//     */
//    private $employeSearcher;

    /**
     * EmployeeController constructor.
     * @param SearchByProfessionAndLocation $employeSearcher
     */
//    public function __construct(SearchByProfessionAndLocation $employeSearcher)
//    {
//        $this->employeSearcher = $employeSearcher;
//    }

    /**
     * @Route("", name="search_employee", methods={"GET"})
     * @param Request $request
     * @return JsonResponse
     */
//    public function search(Request $request)
//    {
//        $locationId = $request->get('locationId');
//        $professionId = $request->get('professionId');
//
//        $employees = $this->employeSearcher->search($locationId, $professionId);
//
//        return $this->json($employees, 200, [], ['groups' => ['employee']]);
//    }
}
