<?php

namespace App\Repository;

use App\Entity\CategoryCours;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CategoryCours|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategoryCours|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategoryCours[]    findAll()
 * @method CategoryCours[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryCoursRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CategoryCours::class);
    }

    // /**
    //  * @return CategoryCours[] Returns an array of CategoryCours objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CategoryCours
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
