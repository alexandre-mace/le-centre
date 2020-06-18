<?php

namespace App\Repository;

use App\Entity\PracticalInfo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PracticalInfo|null find($id, $lockMode = null, $lockVersion = null)
 * @method PracticalInfo|null findOneBy(array $criteria, array $orderBy = null)
 * @method PracticalInfo[]    findAll()
 * @method PracticalInfo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PracticalInfoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PracticalInfo::class);
    }

    // /**
    //  * @return PracticalInfo[] Returns an array of PracticalInfo objects
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
    public function findOneBySomeField($value): ?PracticalInfo
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
