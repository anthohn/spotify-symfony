<?php

namespace App\Repository;

use App\Entity\Includes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Includes>
 *
 * @method Includes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Includes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Includes[]    findAll()
 * @method Includes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IncludesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Includes::class);
    }

//    /**
//     * @return Includes[] Returns an array of Includes objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Includes
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
