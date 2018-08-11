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
            'name' => 'World',
        ]);
    }
    /**
     * @Route("/synchronize", name="synchronize-git")
     */
    public function pull()
    {
        echo 'Begin: Pull code from BitBucket<br/>';
        exec('git pull git@bitbucket.org:jobbag/jobbagapi.git', $output);

        foreach ($output as $o) {
            echo $o . '<br/>';
        }

        echo 'End: Pull code from BitBucket<br/>';

        exit;
    }
}
