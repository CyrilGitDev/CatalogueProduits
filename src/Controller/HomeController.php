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
       /* $rechercheMarque = new MarqueRecherche();
        $formMarque = $this->createForm(MarqueRechercheType::class, $rechercheMarque);
        $formMarque->handleRequest($request);*/
        $recherche = new ProduitRecherche();
        $form = $this->createForm(ProduitRechercheType::class, $recherche);
        $form->handleRequest($request);

        /*$marque = $paginator->paginate(
            $this->repo->findAllMarqueRecherche($rechercheMarque),
            $request->query->getInt('page', 1),
            33
        );*/
        
       
        $produit = $paginator->paginate(
            $this->repo->findAllProduitRecherche($recherche),
            $request->query->getInt('page', 1),
            32
        );
        /*$produit = $repo->findAll();*/
        return $this->render('pages/home.html.twig',[
            'current_menu' => 'produits',
            'produits' => $produit,
           /* 'produits' => $produit,*/
            'form' => $form->createView(),
            /*'formMarque' => $formMarque->createView()*/
        ]); 

    }
}

/*<div class="jumbotron"> 
    <div class="container">
        {{ form_start(form) }}
            <div class = "form-row">
                <div class="col">
                    {{ form_row(form.maxPrix) }}
                </div>
            
                <div class="col">
                    {{ form_row(form.marqueRechercher) }}
                </div>
                
                <div class="col">
                    {{ form_row(form.date) }}
                </div>
                <div class="col">
                    <button class="btn btn-primary">Rechercher</button>.
                </div>
            </div>
        {{ form_end(form) }}
        </div>
    </div>*/