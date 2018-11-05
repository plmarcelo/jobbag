<?php

namespace JobBag\Controller\Prv;

use JobBag\Application\Project\FetchProjectsList;
use JobBag\Domain\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class EmployeeController
 * @package JobBag\Controller
 * @Route("/projects")
 */
class ProjectController extends AbstractController
{
    /**
     * @Route("", name="create_project", methods={"POST"})
     * @param Request $request
     * @param SerializerInterface $serializer
     * @return mixed
     */
    public function create(Request $request, SerializerInterface $serializer)
    {
        $project = $serializer->deserialize($request->getContent(), Project::class, 'json');

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($project);
        $entityManager->flush();

        return $this->json($project, 200, [], ['groups' => ['public']]);
    }

    /**
     * @Route("", name="list_projects", methods={"GET"})
     * @param Request $request
     * @param FetchProjectsList $projectsFetcher
     * @return mixed
     */
    public function list(Request $request, FetchProjectsList $projectsFetcher)
    {

        $projects = $projectsFetcher->fetchLatest($request->get('since'), $request->get('limit'));

        if ($projects->isEmpty()) {
            return $this->json([
                'type'    => 'warning',
                'message' => 'No project found'
            ], 404);
        }

        return $this->json($projects, 200, [], ['groups' => ['public']]);
    }
}
