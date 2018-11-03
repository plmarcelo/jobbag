<?php

namespace JobBag\Controller;

use JobBag\Domain\Entity\Employer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class EmployerController
 * @package JobBag\Controller
 * @Route("/employers")
 */
class EmployerController extends AbstractController
{
    /**
     * @Route("", name="create_employer", methods={"POST"})
     * @param Request $request
     * @param SerializerInterface $serializer
     * @return mixed
     */
    public function create(Request $request, SerializerInterface $serializer)
    {
        $employer = $serializer->deserialize($request->getContent(), Employer::class, 'json');

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($employer);
        $entityManager->flush();

        return $this->json($employer, 200, [], ['groups' => ['public']]);
    }
}
