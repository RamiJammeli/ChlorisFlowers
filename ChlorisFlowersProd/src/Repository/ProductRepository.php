<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\Driver\Exception;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\Pagination\PaginationInterface;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    // /**
    //  * @return Product[] Returns an array of Product objects
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
    public function findOneBySomeField($value): ?Product
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function ShowCatgorie()
    {
        return $this->createQueryBuilder('a')
            ->select('a.categorie','a.imageCategorie')
            ->addGroupBy('a.categorie')
            ->addOrderBy('a.categorie','DESC')
            ->getQuery()
            ->getResult()
            ;

    }
    public function findByCategorie($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.categorie = :val')
            ->andWhere('a.status = :val1')
            ->setParameter('val', $value)
            ->setParameter('val1', 'Valide')
            ->getQuery()
            ->getResult()
            ;

    }
   public function filter($boxColor,$sizes,$cat,$roseColor,$minPrice,$maxPrice)
    {
        $queryBuilder=$this->createQueryBuilder('a')
            ->where('a.categorie = :val');
        $queryBuilder->setParameter('val', $cat);



        if( $sizes) {
            $queryBuilder->andWhere('a.boxSize IN(:val1)');
            $queryBuilder->setParameter('val1', $sizes);
        }
        if( $boxColor ) {

            $queryBuilder->andWhere('a.boxColor IN(:val2)');
            $queryBuilder->setParameter('val2',$boxColor);
        }

        if( $roseColor ) {
            $queryBuilder->andWhere('a.roseColor IN(:val3)');
            $queryBuilder->setParameter('val3',$roseColor);

        }
        // filter price
        $queryBuilder->andWhere('a.prix > :min');
        $queryBuilder->andWhere('a.prix < :max');
        $queryBuilder->setParameter('min',$minPrice);
        $queryBuilder->setParameter('max',$maxPrice);

        $queryBuilder->andWhere('a.status = :val4');

        $queryBuilder->setParameter('val4', 'Valide');


        return $queryBuilder->getQuery()->getResult();

    }
}
