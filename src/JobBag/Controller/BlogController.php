<?php

namespace JobBag\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog/{page<\d+>?1}", name="blog_list")
     */
    public function list($page)
    {
//        return $this->render('controller/blog/index.html.twig', [
//            'controller_name' => 'BlogController',
//        ]);
    }

    /**
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show($slug)
    {
//        return $this->render('controller/blog/index.html.twig', [
//            'controller_name' => 'BlogController',
//        ]);
    }
}
