<?php

namespace App\Repository;

use App\Entity\Produit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Query;
use App\Entity\ProduitRecherche;
use App\Repository;
/**
 * @method Produit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produit[]    findAll()
 * @method Produit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produit::class);
    }

    // /**
    //  * @return Produit[] Returns an array of Produit objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Produit
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /**
     *  @return Query
     */
    public function findAllProduitRecherche(ProduitRecherche $recherche): Query
    {

        $query = $this->findProduit();

        if ($recherche->getNomProduit())
        {
            $query = $query
                ->andWhere('p.nom LIKE :nomProduit')
                //->andWhere('p.nom LIKE \'' .$recherche. '\'')
                //->andWhere($query->expr()->like('p.nom', $query->expr()->literal('%' . $recherche . '%')) )
                //->setParameter('nomProduit', $recherche->getNomProduit());
                //->setParameter('%'.$recherche.'%'->getNomProduit());
            ->setParameter('nomProduit', '%'.$recherche.'%'/*->getNomProduit()*/);
        }

        if ($recherche->getMaxPrix())
        {
            $query = $query
                ->andWhere('p.prix <= :maxPrix')
                ->setParameter('maxPrix', $recherche->getMaxPrix());
        }

        if ($recherche->getMarqueRechercher())
        {
            $query = $query
                ->andWhere('p.marque = :marqueRechercher')
                //->setParameter('marqueRechercher', $recherche->getMarqueRechercher());
                ->setParameter('marqueRechercher', '%'.$recherche.'%'/*->getMarqueRechercher()*/);
        }

        if ($recherche->getdateChercher())
        {
            $query = $query
                ->andWhere('p.dateAjout <= :dateChercher')
                //->setParameter('dateChercher', new \DateTime($recherche->getdateChercher()));
            ->setParameter('dateChercher', '%'.$recherche.'%'/*->getNomProduit()*/);
        }

        return $query->getQuery();
    }

    /**
     *  @return Query
     */
    public function findAllProduit(): Query
    {
        return $this->findProduit()
            ->getQuery();
    }

    private function findProduit(): QueryBuilder
    {
        return $this->createQueryBuilder('p');

    }
}
