<?php

namespace App\Repository;

use App\Entity\Marque;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Query;
use App\Entity\ProduitRecherche;

/**
 * @method Marque|null find($id, $lockMode = null, $lockVersion = null)
 * @method Marque|null findOneBy(array $criteria, array $orderBy = null)
 * @method Marque[]    findAll()
 * @method Marque[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MarqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Marque::class);
    }

    // /**
    //  * @return Marque[] Returns an array of Marque objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Marque
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

/*
     /**
     *  @return Query
     */
    /*public function findAllMarqueRecherche(MarqueRecherche $recherche): Query
    {

        $query = $this->findMarque();

        if ($recherche->getMarqueRechercher())
        {
            $query = $query
                ->andWhere('p.nom <= :marqueRechercher')
                ->setParameter('marqueRechercher', $recherche->getMarqueRechercher());
        }

        /*if ($recherche->getMarqueRechercher())
        {
            $query = $query
                ->andWhere('p.marque = :marqueRechercher')
                ->setParameter('marqueRechercher', $recherche->getMarqueRechercher($recherche));
        }*/

    
        /*return $query->getQuery();
    }

    /**
     *  @return Query
     */
    /*public function findAllProduit(): Query
    {
        return $this->findProduit()
            ->getQuery();
    }

    private function findMarque(): QueryBuilder
    {
        return $this->createQueryBuilder('p');
            /*->where('p.prix < 0');*//*
    }*/
}
