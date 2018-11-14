<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use App\Mailer\Emailer;

class ContactFormController extends AbstractController
{
    /**
     * @Route("/contact/form", name="contact_form")
     */
    public function index(Request $request, Emailer $emailer, \Swift_Mailer $mailer)
    {
        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->addFlash('success', 'Thanks for submitting!');
            dump($form);
            $this->addFlash('warning', 'We will work to get back to you as soon as possible!');


        }

        return $this->render('contact_form/index.html.twig', [
            'contact_form' => $form->createView(),
        ]);
    }
}
