<?php

namespace JobBag\Controller\Pub;

use JobBag\Application\Profession\FetchProfessionsList;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
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
     * @Route("", name="list_professions", methods={"GET"})
     * @param Request $request
     * @param string|null $_locale
     * @return JsonResponse
     */
    public function list(Request $request, string $_locale = null): JsonResponse
    {
        switch (true) {
            case $request->query->has('countryId'):
                $professions = $this->professionsFetcher->fetchByCountryId($request->query->get('countryId'), $_locale);
                break;
            case $request->query->has('parentId'):
                $professions = $this->professionsFetcher->fetchByParentId($request->query->get('parentId'), $_locale);
                break;
            default:
                return $this->json(
                    [
                        'errors' => [
                            'message' => 'Al menos debe informarse el país(countryId) o la categoría(parentId)'
                        ]
                    ],
                    400
                );
        }

        return $this->json($professions, 200, [], ['groups' => ['profession']]);
    }

    /**
     * @Route("/{id}", name="show_profession", methods={"GET"})
     * @param int|null $id
     * @param string|null $_locale
     * @return JsonResponse
     */
    public function index($id = null, $_locale = null): JsonResponse
    {
        $profession = $this->professionsFetcher->fetch($id, $_locale);

        return $this->json($profession, 404, [], ['groups' => ['profession']]);
    }
}
