<?php

namespace App\Repository;

use App\Entity\MediaSection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MediaSection|null find($id, $lockMode = null, $lockVersion = null)
 * @method MediaSection|null findOneBy(array $criteria, array $orderBy = null)
 * @method MediaSection[]    findAll()
 * @method MediaSection[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MediaSectionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MediaSection::class);
    }

    // /**
    //  * @return MediaSection[] Returns an array of MediaSection objects
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
    public function findOneBySomeField($value): ?MediaSection
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
