<?php

namespace App\Controller;

use App\Repository\AnnonceRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AnnonceController extends AbstractController
{
    /**
     * @Route("/annonce", name="annonce_liste")
     */
    public function listeAnnonces(AnnonceRepository $repos)
    {
        $annonces=$repo->findAll();
        return $this->render('annonce/index.html.twig', [
            'annonces' => $annonces
        ]);
    }

       /**
     * @Route("/annonce/ajout", name="annonce_ajout")
     */
    public function ajouteAnnonce()
    {
       
        return $this->render('annonce/index.html.twig');
    }
}
