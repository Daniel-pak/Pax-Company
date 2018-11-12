<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PhilosophyController extends AbstractController
{
    /**
     * @Route("/philosophy", name="philosophy")
     */
    public function index()
    {
        return $this->render('philosophy/index.html.twig', [
            'controller_name' => 'PhilosophyController',
        ]);
    }
}
