<?php

namespace JobBag\Controller\Pub;

use JobBag\Application\Employee\SearchByProfessionAndState;
use JobBag\Domain\Entity\Employee;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class EmployeeController
 * @package JobBag\Controller
 * @Route("/employees")
 */
class EmployeeController extends AbstractController
{
    /**
     * @var SearchByProfessionAndState
     */
    private $employeSearcher;

    /**
     * EmployeeController constructor.
     * @param SearchByProfessionAndState $employeSearcher
     */
    public function __construct(SearchByProfessionAndState $employeSearcher)
    {
        $this->employeSearcher = $employeSearcher;
    }

    /**
     * @Route("/", name="search_employee", methods={"GET"})
     * @param Request $request
     * @return JsonResponse
     */
    public function search(Request $request)
    {
        $provinceId = $request->get('province_id');
        $professionId = $request->get('profession_id');

        $employees = $this->employeSearcher->search($provinceId, $professionId);

        return $this->json($employees, 200, [], ['groups' => ['employee']]);
    }

    /**
     * @Route("/", name="create_employee", methods={"POST"})
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request)
    {
        $data = $request->getContent();

        $employee = $this->get('serializer')->deserialize($data, Employee::class, 'json');

        return $this->json($employee, 200, [], ['groups' => ['employee']]);
    }
}
