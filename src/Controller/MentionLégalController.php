<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MentionLégalController extends AbstractController
{
    /**
     * @Route("/mention/l/gal", name="app_mention_l_gal")
     */
    public function index(): Response
    {
        return $this->render('mention_l�gal/index.html.twig', [
            'controller_name' => 'MentionLégalController',
        ]);
    }
}
