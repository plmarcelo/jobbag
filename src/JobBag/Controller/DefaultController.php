<?php

namespace JobBag\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return $this->render('controller/index.html.twig', [
            'name' => 'Mundo',
        ]);
    }

    /**
     * @Route("/login_check", name="api_login_check")
     */
    public function loginCheckAction() {
        return 'Hola';
    }
}
