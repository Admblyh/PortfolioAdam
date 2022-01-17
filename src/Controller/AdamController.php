<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdamController extends AbstractController
{
    /**
     * @Route("/Accueil", name="Accueil")
     */
    public function Accueil(): Response
    {
        return $this->render('blog/Accueil.html.twig', [
            'controller_name' => 'AdamController',
        ]);
    }

    /**
     * @Route("/Portfolio", name="Portfolio")
     */
    public function Portfolio()
    {
        return $this->render('blog/Portfolio.html.twig');

    }

    /**
     * @Route("/About", name="About")
     */
    public function About()
    {
        return $this->render('blog/About.html.twig');

    }

    /**
     * @Route("/CV", name="CV")
     */
    public function CV()
    {
        return $this->render('blog/CV.html.twig');

    }

    /**
     * @Route("/Contact", name="Contact")
     */
    public function Contact()
    {
        return $this->render('blog/Contact.html.twig');

    }
}    