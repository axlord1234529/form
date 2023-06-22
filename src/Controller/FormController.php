<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class FormController extends AbstractController
{
    #[Route('/')]
    public function show(Environment $twig, Request $request, EntityManagerInterface $entityManager) : Response
    {
        $contact = new Contact();

        $form = $this->createForm(ContactFormType::class,$contact);

        $form->handleRequest($request);

        $isSent = false;

        if ($form->isSubmitted() && $form->isValid())
        {
            $entityManager->persist($contact);
            $entityManager->flush();
            $isSent = true;
        }

        return new Response($twig->render('form/show.html.twig',[
            'contact_form' => $form->createView(),
            'is_sent' => $isSent
        ]));
    }
}
