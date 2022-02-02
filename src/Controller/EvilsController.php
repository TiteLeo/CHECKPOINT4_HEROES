<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EvilsController extends AbstractController
{
    /**
     * @Route("/evils", name="evils")
     */
    public function index(): Response
    {
        return $this->render('evils/index.html.twig', [
            'controller_name' => 'EvilsController',
        ]);
    }
}
