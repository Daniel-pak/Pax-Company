<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestimonialController extends AbstractController
{
    /**
     * @Route("/testimonials", name="testimonial")
     */
    public function index()
    {
        return $this->render('testimonial/index.html.twig', [
            'controller_name' => 'TestimonialController',
        ]);
    }
}
