<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }
    /**
     * @Route("/behind_the_brand", name="behind_the_brand")
     */
    public function aboutUs()
    {
        return $this->render('accueil/aboutUs.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }
    /**
     * @Route("/tableau_dimension", name="tableau_dimension")
     */
    public function dimension()
    {
        return $this->render('accueil/dimension.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

}
