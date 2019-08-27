<?php

namespace App\Controller\Admin;

use App\Repository\MarqueRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Marque;
use App\Form\MarqueType;
use Symfony\Component\HttpFoundation\Request;

class AdminMarqueController extends AbstractController
{

    /**
     * @var ProduitRepository
     * @var ObjectManager
     */

    private $repo;
    
    public function __construct(MarqueRepository $repo, ObjectManager $manager)
    {
        $this->repo = $repo;
        $this->manager=$manager;
    }


    /**
     * @Route("/admin", name="admin.produit.index")
     * @return \Symfony\Component\HttpFoundation\Response
    **/
    public function index()
    {
        $produits = $this->repo->findAll();
        return $this->render('produits/index.html.twig', compact('produits'));
    }

    /**
     * @Route("/admin/createMarque", name="admin.Marque.Creation")
     */
    public function new(Request $request)
    {
        $marque = new Marque();
        $form = $this->createForm(MarqueType::class, $marque);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
                $this->manager->persist($marque);
                $this->manager->flush();
                $this->addFlash('success', 'créé avec succès');
                return $this->redirectToRoute('admin.produit.index');
        }
        return $this->render('marque/new.html.twig', [
            'marque' => $marque,
            'form' => $form->createView()
        ]);
    }

}