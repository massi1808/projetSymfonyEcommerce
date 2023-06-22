<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProduitRepository;

class HommeController extends AbstractController
{
    /**
     * @Route("/homme", name="app_homme")
     */
    public function index(ProduitRepository $produitRepository): Response
    {
        return $this->render('homme/index.html.twig', [
            'produits' => $produitRepository->findAll(),
        ]);
 
    }
}
