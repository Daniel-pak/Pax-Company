<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/{path}", name="admin")
     */
    public function index($path)
    {
        //token authentication
          //if token is set -> check against DB
            //if return is true, redirect to path -> admin/home
          //else return

        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'path' => $path
        ]);
    }
}
