<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CdController extends AbstractController
{
    /**
     * @Route("/cd", name="app_cd")
     */
    public function index(): Response
    {
        return $this->render('cd/index.html.twig', [
            'controller_name' => 'CdController',
        ]);
    }
}
