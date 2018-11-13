<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ServicePlanController extends AbstractController
{
    /**
     * @Route("/services", name="service_plan")
     */
    public function index()
    {
        return $this->render('service_plan/index.html.twig', [
            'controller_name' => 'ServicePlanController',
        ]);
    }
}
