<?php

namespace App\Controller;
use App\Entity\Message;
use App\Form\ContactFormType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, ManagerRegistry $managerRegistry): Response
    {
        $contact = new Message();
        $form = $this->createForm(ContactFormType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $managerRegistry->getManager();
            $entityManager->persist($contact);
            $entityManager->flush();
            $this->addFlash('success', 'Top! Nous avons bien reçu votre message! A bientôt.');

            return $this->redirectToRoute('home');
        }
        return $this->render('contact/index.html.twig', [
            'contactForm' => $form->createView(),
        ]);
    }
}
