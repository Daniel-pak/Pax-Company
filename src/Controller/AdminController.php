<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\AdminLoginFormType;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/{path}", name="admin")
     */
    public function index($path)
    {
        $form = $this->createForm(AdminLoginFormType::class);

        //token authentication
          //if token is set -> check against DB
            //if return is true, redirect to path -> admin/home
          //else return login form

        return $this->render('admin/index.html.twig', [
            'admin_form' => $form->createView(),
            'controller_name' => 'AdminController',
            'path' => $path
        ]);
    }
}
