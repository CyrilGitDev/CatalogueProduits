<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\Produit;
use App\Entity\Marque;

class ProduitFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
        for ($i=0; $i <100;$i++)
        {
            $marque = new Marque();
            $marque->setNom($faker->words(1,true));
            $produit = new Produit();
            $produit
                ->setNom($faker->words(3,true))
                ->setPrix($faker->numberBetween(0, 1000))
                ->setMarque($marque)
                ->setReference($faker->numberBetween(0, 1000))
                ->setDateAjout(new \DateTime('now'));
            $manager->persist($marque);
            $manager->persist($produit);
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
