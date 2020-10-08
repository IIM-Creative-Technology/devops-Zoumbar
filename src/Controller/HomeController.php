<?php

namespace App\Controller;

use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {

        $post = new Post();

        $post -> setTitle('Titre 1')
            ->setContent("Lorem Ipsum")
            ->setAuthor('Esteban')
            ->setCreatedAt(new \DateTime());
         

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            "post" => $post
        ]);
    }
}
