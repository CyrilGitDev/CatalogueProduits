<?php


namespace App\Controller;

use App\Controller\ProduitsController;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//use App\Controller\ObjectManager;
use App\Entity\Marque;
use App\Entity\Produit;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;

class ProduitsController extends AbstractController
{

    /*charger avec wiring dans un constructeur*/
    /**
     *  @var ProduitRepository
     */
    private $repo;
    /**
     *  @var ObjectManager
     */
    private $manager;
    
    public function __construct(ProduitRepository $repo,ObjectManager $manager )
    {
        $this->repo = $repo;
        $this->manager = $manager;
    }


    /**
     * @Route("/biens", name="produits")
     * @return Response
    **/

    /*wiring directement dans l'index*/
    public function index(Request $request): Response
    {
        return $this->render('index.html.twig', [
            'current_menu' => 'produits'
        ]);
    }


     /**
     * @Route("/biens/{slug}-{id}", name="produit.show", requirements={"slug": "[a-z0-9\-]*"})
     * @return Response
    **/
    public function show($slug, $id): Response
    {
        $produit = $this->repo->find($id);
        return $this->render('produits/show.html.twig', [
            'produit' => $produit,
            'current_menu' => 'produits'
        ]);
    }
}