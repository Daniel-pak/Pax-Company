<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContactType;

class ContactFormController extends AbstractController
{
    /**
     * @Route("/contact/form", name="contact_form")
     */
    public function index()
    {
        $form = $this->createForm(ContactType::class);

        return $this->render('contact_form/index.html.twig', [
            'contact_form' => $form->createView(),
        ]);
    }
}
