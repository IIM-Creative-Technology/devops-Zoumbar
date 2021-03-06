<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function home()
    {
        return $this->render('pages/home.html.twig');
    }


    /**
     * @Route("/about-me", name="app_about")
     */
    public function about()
    {
        return $this->render('pages/about.html.twig');
    }

}
