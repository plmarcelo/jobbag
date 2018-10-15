<?php

namespace JobBag\Controller;

use JobBag\Domain\Entity\Person;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Serializer;

/**
 * Class PersonController
 * @package JobBag\Controller
 * @Route("/persons")
 */
class PersonController extends AbstractController
{
    /**
     * @Route("/{id}", name="show_person", methods={"GET"})
     * @param int $id
     * @return mixed
     */
    public function show(int $id)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $person = $entityManager->getRepository(Person::class)->find($id);

        return $this->json($person, 200, [], ['groups' => ['public']]);
    }

    /**
     * @Route("", name="create_person", methods={"POST"})
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $data = $request->getContent();

        /**
         * @var Serializer $serializer
         */
        $serializer = $this->get('serializer');
        $person = $serializer->deserialize($data, Person::class, 'json');

        $entityManager->persist($person);

        $entityManager->flush();

        return $this->json($person, 200, [], ['groups' => ['public']]);
    }
}
