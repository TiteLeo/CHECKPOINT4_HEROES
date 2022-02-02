<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HeroesController extends AbstractController
{
    /**
     * @Route("/heroes", name="heroes")
     */
    public function index(): Response
    {
        return $this->render('heroes/index.html.twig', [
            'controller_name' => 'HeroesController',
        ]);
    }

    /**
     * @Route("/heroes/muscles", name="muscles")
     */
    public function muscles(): Response
    {
        return $this->render('heroes/muscles.html.twig', [
            'controller_name' => 'HeroesController',
        ]);
    }

    /**
     * @Route("/heroes/feminists", name="feminists")
     */
    public function feminists(): Response
    {
        return $this->render('heroes/feminists.html.twig', [
            'controller_name' => 'HeroesController',
        ]);
    }

    /**
     * @Route("/heroes/undefined", name="undefined")
     */
    public function undefined(): Response
    {
        return $this->render('heroes/undefined.html.twig', [
            'controller_name' => 'HeroesController',
        ]);
    }
}
