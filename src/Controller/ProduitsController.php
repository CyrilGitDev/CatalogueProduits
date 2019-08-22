<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Marque;
use App\Entity\Produit;

class ProduitsController extends AbstractController
{

/**
 * @Route("/biens", name="produits")
 * @return Response
**/

    public function index(): Response
    {

        $marque1 = new Marque();
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

        $entityManager->flush();

        return $this->render('produits/index.html.twig', [
            'current_menu' => 'produits'
        ]);
    }

}