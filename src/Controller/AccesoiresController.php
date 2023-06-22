<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProduitRepository;

class AccesoiresController extends AbstractController
{
    /**
     * @Route("/accessoires", name="app_accessoires")
     */
    public function index(ProduitRepository $produitRepository): Response
    {
        return $this->render('accessoires/index.html.twig', [
            'produits' => $produitRepository->findAll(),
        ]);
 
    }
}
