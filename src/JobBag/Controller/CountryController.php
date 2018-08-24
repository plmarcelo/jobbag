<?php

namespace JobBag\Controller;

use JobBag\Application\Country\CountryPersistorRequest;
use JobBag\Application\Country\FetchCountriesList;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CountryController extends AbstractController
{
    /**
     * @var FetchCountriesList
     */
    private $countriesFetcher;

    /**
     * CountryController constructor.
     * @param FetchCountriesList $countriesFetcher
     */
    public function __construct(FetchCountriesList $countriesFetcher)
    {
        $this->countriesFetcher = $countriesFetcher;
    }

    /**
     * @Route("/country", name="country_list", methods={"GET"})
     */
    public function list($_locale)
    {
        $countries = $this->countriesFetcher->fetch($_locale);

        return $this->json($countries, 200, [], ['groups' => ['country']]);
    }

    /**
     * @Route("/country/{id}", name="country", methods={"GET"})
     */
    public function show($id, $_locale)
    {
        $country = $this->countriesFetcher->fetchById($id, $_locale);

        return $this->json($country, 200, [], ['groups' => ['country']]);
    }

    /**
     * @Route("/country", name="country", methods={"POST"})
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request)
    {
        $data = $request->getContent();

        $country = $this->get('serializer')->deserialize($data, CountryPersistorRequest::class, 'json');
//        $country = $this->countriesFetcher->fetchById($id, $_locale);
//
        return $this->json($country);
    }
}
