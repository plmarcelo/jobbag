<?php

namespace JobBag\Controller;

use JobBag\Application\Employee\SearchByProfessionAndLocation;
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
     * @Route("", name="list_employees", methods={"GET"})
     * @return mixed
     */
    public function list()
    {
        $entityManager = $this->getDoctrine()->getManager();

        $person = $entityManager->getRepository(Employee::class)->findAll();

        return $this->json($person, 200, [], ['groups' => ['public']]);
    }

    /**
     * @Route("/{id}", name="show_employee", methods={"GET"})
     * @param int $id
     * @return mixed
     */
    public function show(int $id)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $person = $entityManager->getRepository(Employee::class)->find($id);

        return $this->json($person, 200, [], ['groups' => ['public']]);
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
