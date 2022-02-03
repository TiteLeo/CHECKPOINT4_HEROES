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
    public function muscles(ManagerRegistry $managerRegistry, CharacterRepository $characterRepository): Response
    {
        $characters = [];
        foreach ($characterRepository->findBy(['isNasty' => false, 'sex' => 'Masculin']) as $character) {
                $characters[] = $character;
        }
        return $this->render('heroes/muscles.html.twig', [
            'heroes' => $characterRepository->findAll(),
            'characters' => $characters
        ]);
    }

    /**
     * @Route("/heroes/feminists", name="feminists")
     */
    public function feminists(ManagerRegistry $managerRegistry, CharacterRepository $characterRepository): Response
    {
        $characters = [];
        foreach ($characterRepository->findBy(['isNasty' => false, 'sex' => 'Feminin']) as $character) {
            $characters[] = $character;
        }
        return $this->render('heroes/feminists.html.twig', [
            'heroes' => $characterRepository->findAll(),
            'characters' => $characters
        ]);
    }

    /**
     * @Route("/heroes/undefined", name="undefined")
     */
    public function undefined(ManagerRegistry $managerRegistry, CharacterRepository $characterRepository): Response
    {
        $characters = [];
        foreach ($characterRepository->findBy(['isNasty' => false, 'sex' => 'Undefined']) as $character) {
            $characters[] = $character;
        }
        return $this->render('heroes/undefined.html.twig', [
            'heroes' => $characterRepository->findAll(),
            'characters' => $characters
        ]);
    }
    /**
     * @Route("/heroes/show/{id}", name="heroes_show")
     */
    public function show(Character $character, CharacterRepository $characterRepository): Response
    {
        return $this->render('heroes/show.html.twig', [
            'character' => $character
        ]);

    }
}
