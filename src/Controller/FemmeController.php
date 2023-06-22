<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProduitRepository;

class FemmeController extends AbstractController
{
    /**
     * @Route("/femme", name="app_femme")
     */
    public function index(ProduitRepository $produitRepository): Response
    {
        return $this->render('femme/index.html.twig', [
            'produits' => $produitRepository->findAll(),
        ]);
    }
}
