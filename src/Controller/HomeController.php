<?php


namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HomeController extends AbstractController
{ 
   
    /*
    /**
     * @var Environment
     */
    /*private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }
    */
   
    /**
     * @Route("/", name="home")
     * @param ProduitRepository $repo
     * @return Response
     */

    public function index(ProduitRepository $repo): Response
    {
        $produit = $repo->findAll();
        return $this->render('pages/home.html.twig',[
            'produits' => $produit
        ]); 

    }
}