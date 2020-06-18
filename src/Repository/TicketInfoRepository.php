<?php

namespace App\Repository;

use App\Entity\TicketInfo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TicketInfo|null find($id, $lockMode = null, $lockVersion = null)
 * @method TicketInfo|null findOneBy(array $criteria, array $orderBy = null)
 * @method TicketInfo[]    findAll()
 * @method TicketInfo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TicketInfoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TicketInfo::class);
    }

    // /**
    //  * @return TicketInfo[] Returns an array of TicketInfo objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TicketInfo
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
