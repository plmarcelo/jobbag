<?php

namespace JobBag\Controller;

use JobBag\Application\Employee\SearchByProfessionAndState;
use JobBag\Domain\Entity\Employee;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Serializer;
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
        $locationId = $request->get('locationId');
        $professionId = $request->get('professionId');

        $employees = $this->employeSearcher->search($locationId, $professionId);

        return $this->json($employees, 200, [], ['groups' => ['employee']]);
    }


    /**
     * @Route("", name="create_employee", methods={"POST"})
     * @param Request $request
     * @param SerializerInterface $serializer
     * @return mixed
     */
    public function create(Request $request, SerializerInterface $serializer)
    {
        $employee = $serializer->deserialize($request->getContent(), Employee::class, 'json');

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($employee);
        $entityManager->flush();

        return $this->json($employee, 200, [], ['groups' => ['public']]);
    }
}
