<?php

namespace App\Controller;

use App\Entity\Character;
use App\Form\CharacterAddType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CharacterAddController extends AbstractController
{
    /**
     * @Route("/character/add", name="character_add")
     */
    public function index(Request $request, ManagerRegistry $managerRegistry): Response
    {
        $addCharacter = new Character();
        $form = $this->createForm(CharacterAddType::class, $addCharacter);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $managerRegistry->getManager();
            $entityManager->persist($addCharacter);
            $entityManager->flush();
            $this->addFlash('success', 'Top! Nous avons bien reçu votre proposition de Super! A bientôt.');

            return $this->redirectToRoute('home');
        }

        return $this->render('character_add/index.html.twig', [
            'characterForm' => $form->createView(),

        ]);
    }

   /* /**
     * @Route("/power/add", name="power_add", methodes={"GET", "POST"})
     */
   /* public function addPower(
        Request         $request,
        ManagerRegistry $managerRegistry
    ): Response
    {
        $power = new Power();
        if ($form->isSubmitted() && $form->isValid()) {
            $managerRegistry->getManager()->persist();
            $managerRegistry->getManager()->flush();
        }
        return $this->render('character_add/index.html.twig', [
            'characterForm' => $form->createView(),

        ]);


    } */
}

