<?php

namespace App\Repository;

use App\Entity\Top;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Top>
 *
 * @method Top|null find($id, $lockMode = null, $lockVersion = null)
 * @method Top|null findOneBy(array $criteria, array $orderBy = null)
 * @method Top[]    findAll()
 * @method Top[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TopRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Top::class);
    }

//    /**
//     * @return Top[] Returns an array of Top objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Top
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
