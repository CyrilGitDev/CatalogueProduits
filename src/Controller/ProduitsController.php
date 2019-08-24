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
    public function index(): Response
    {

        /*$marque1 = new Marque();
        $marque1->setNom("Yamu");

        $produit = new Produit();

        $produit->setNom("cafetiere")
            ->setNom("Machine à café")
            ->setPrix(15)
            ->setMarque($marque1)
            ->setReference("000001");

        $entityManager = $this->getDoctrine()->getManager();

        $entityManager->persist($marque1);
        $entityManager->persist($produit);

        $entityManager->flush();*/

        /* charger repository sans wiring
        $repo = $this->getDoctrine()->getRepository(Produit::class); 
        dump($repo);*/
       
        /*edit valeur de produit ds la base 
        $produit = $this -> repo->findAll();
        //dump($produit);
       
       /* $produit[0]->setPrix(15.2);
        $this->manager->flush();*/
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