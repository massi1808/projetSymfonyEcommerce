<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProduitRepository;

class VetmentsController extends AbstractController
{
    /**
     * @Route("/vetments", name="app_vetments")
     */
    public function index(ProduitRepository $produitRepository): Response
    {
        return $this->render('vetments/index.html.twig', [
            'produits' => $produitRepository->findAll(),
        ]);
 
    }
}
