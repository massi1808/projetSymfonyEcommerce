<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProduitRepository;

class NouveautesController extends AbstractController
{
    /**
     * @Route("/nouveautes", name="app_nouveautes")
     */
    public function index(ProduitRepository $produitRepository): Response
    {
        return $this->render('nouveautes/index.html.twig', [
            'produits' => $produitRepository->findAll(),
        ]);
 
    }
}
