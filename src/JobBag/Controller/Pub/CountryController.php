<?php

namespace JobBag\Controller\Pub;

use JobBag\Domain\Repository\CountryRepository;
use JobBag\Domain\Repository\CountryTranslationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CountryController
 * @package JobBag\Controller\Pub
 * @Route("/countries")
 */
class CountryController extends AbstractController
{
    /**
     * @Route("", name="list_countries", methods={"GET"})
     * @param string $_locale
     * @param CountryTranslationRepository $countryRepository
     * @return JsonResponse
     */
    public function index($_locale, CountryTranslationRepository $countryRepository): JsonResponse
    {
        $countries = $countryRepository->findActive($_locale);

        return $this->json($countries, 200, [], ['groups' => ['public']]);
    }
}
