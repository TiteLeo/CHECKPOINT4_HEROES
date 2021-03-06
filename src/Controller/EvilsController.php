<?php

namespace App\Controller;

use App\Entity\Character;
use App\Repository\CharacterRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EvilsController extends AbstractController
{
    /**
     * @Route("/evils", name="evils")
     */
    public function index(ManagerRegistry $managerRegistry, CharacterRepository $characterRepository): Response
    {
        $characterRepository = $managerRegistry->getRepository(Character::class);
        $characters = $characterRepository->findBy(['isNasty' => true]);

        return $this->render('evils/index.html.twig', [
            'evils' => $characterRepository->findAll(),
            'characters' => $characters
        ]);
    }
    /**
     * @Route("/evils/ugly", name="ugly")
     */
    public function muscles(ManagerRegistry $managerRegistry, CharacterRepository $characterRepository): Response
    {
        $characters = [];
        foreach ($characterRepository->findBy(['isNasty' => true, 'sex' => 'Masculin']) as $character) {
            $characters[] = $character;
        }
        return $this->render('evils/ugly.html.twig', [
            'evils' => $characterRepository->findAll(),
            'characters' => $characters
        ]);
    }

    /**
     * @Route("/evils/fifilles", name="fifilles")
     */
    public function feminists(ManagerRegistry $managerRegistry, CharacterRepository $characterRepository): Response
    {
        $characters = [];
        foreach ($characterRepository->findBy(['isNasty' => true, 'sex' => 'Feminin']) as $character) {
            $characters[] = $character;
        }
        return $this->render('evils/fifilles.html.twig', [
            'evils' => $characterRepository->findAll(),
            'characters' => $characters
        ]);
    }

    /**
     * @Route("/evils/undefined", name="comingOut")
     */
    public function undefined(ManagerRegistry $managerRegistry, CharacterRepository $characterRepository): Response
    {
        $characters = [];
        foreach ($characterRepository->findBy(['isNasty' => true, 'sex' => 'Undefined']) as $character) {
            $characters[] = $character;
        }
        return $this->render('evils/undefined.html.twig', [
            'evils' => $characterRepository->findAll(),
            'characters' => $characters
        ]);
    }
    /**
     * @Route("/evils/show/{id}", name="evils_show")
     */
    public function show(Character $character, CharacterRepository $characterRepository): Response
    {
        return $this->render('evils/show.html.twig', [
            'character' => $character
        ]);

    }
}
