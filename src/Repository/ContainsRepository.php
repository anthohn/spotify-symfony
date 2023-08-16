<?php

namespace App\Repository;

use App\Entity\Contains;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Contains>
 *
 * @method Contains|null find($id, $lockMode = null, $lockVersion = null)
 * @method Contains|null findOneBy(array $criteria, array $orderBy = null)
 * @method Contains[]    findAll()
 * @method Contains[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContainsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Contains::class);
    }

//    /**
//     * @return Contains[] Returns an array of Contains objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Contains
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
