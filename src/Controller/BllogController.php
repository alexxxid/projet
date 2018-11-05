<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BllogController extends AbstractController
{
    /**
     * @Route("/bllog", name="bllog")
     */
    public function index()
    {
        return $this->render('bllog/index.html.twig', [
            'controller_name' => 'BllogController',
        ]);
    }
     /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('bllog/home.html.twig');
    
    }
}
