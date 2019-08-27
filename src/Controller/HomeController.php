<?php


namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\ProduitRecherche;
use Symfony\Component\Form\FormTypeInterface;
use App\Form\ProduitRechercheType;
use App\Entity\MarqueRecherche;
use App\Form\MarqueRechercheType;
use Knp\Component\Pager\PaginatorInterface;
use Doctrine\Common\Persistence\ObjectManager;

class HomeController extends AbstractController
{ 
   
      private $repo;
    /**
     * @var ObjectManager
     */
    private $manager;

    public function __construct(ProduitRepository $repo, ObjectManager $manager)
    {
        $this->repo = $repo;
        $this->manager = $manager;
    }
    
   
    /**
     * @Route("/", name="home")
     * @param ProduitRepository $repo
     * @return Response
     */

    public function index(ProduitRepository $repo, Request $request, PaginatorInterface $paginator): Response
    {
      
        $recherche = new ProduitRecherche();
        $form = $this->createForm(ProduitRechercheType::class, $recherche);
        $form->handleRequest($request);      
       
        $produit = $paginator->paginate(
            $this->repo->findAllProduitRecherche($recherche),
            $request->query->getInt('page', 1),
            32
        );
        /*$produit = $repo->findAll();*/
        return $this->render('pages/home.html.twig',[
            'current_menu' => 'produits',
            'produits' => $produit,
      
            'form' => $form->createView(),
            
        ]); 

    }
}
