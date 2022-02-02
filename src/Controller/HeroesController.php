<?php

namespace App\Controller;

use App\Entity\Character;
use App\Repository\CharacterRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HeroesController extends AbstractController
{
    /**
     * @Route("/heroes", name="heroes")
     */
    public function index(ManagerRegistry $managerRegistry, CharacterRepository $characterRepository): Response
    {
        $characterRepository = $managerRegistry->getRepository(Character::class);
        $characters = $characterRepository->findBy(['isNasty' => false]);

        return $this->render('heroes/index.html.twig', [
            'heroes' => $characterRepository->findAll(),
            'characters' => $characters
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
