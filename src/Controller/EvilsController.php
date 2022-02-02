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
}
