<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoockiesController extends AbstractController
{
    /**
     * @Route("/coockies", name="app_coockies")
     */
    public function index(): Response
    {
        return $this->render('coockies/index.html.twig', [
            'controller_name' => 'CoockiesController',
        ]);
    }
}
