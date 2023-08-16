<?php

namespace App\Repository;

use App\Entity\Have;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Have>
 *
 * @method Have|null find($id, $lockMode = null, $lockVersion = null)
 * @method Have|null findOneBy(array $criteria, array $orderBy = null)
 * @method Have[]    findAll()
 * @method Have[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HaveRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Have::class);
    }

//    /**
//     * @return Have[] Returns an array of Have objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('h.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Have
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
