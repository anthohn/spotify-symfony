<?php

namespace App\Repository;

use App\Entity\Adds;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Adds>
 *
 * @method Adds|null find($id, $lockMode = null, $lockVersion = null)
 * @method Adds|null findOneBy(array $criteria, array $orderBy = null)
 * @method Adds[]    findAll()
 * @method Adds[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AddsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Adds::class);
    }

//    /**
//     * @return Adds[] Returns an array of Adds objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Adds
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
