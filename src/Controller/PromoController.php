<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProduitRepository;

class PromoController extends AbstractController
{
    /**
     * @Route("/promo", name="app_promo")
     */
    public function index(ProduitRepository $produitRepository): Response
    {
        return $this->render('promo/index.html.twig', [
            'produits' => $produitRepository->findAll(),
        ]);
 
    }
}
