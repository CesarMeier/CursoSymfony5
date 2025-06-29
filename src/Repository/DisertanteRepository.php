<?php

namespace App\Repository;

use App\Entity\Disertante;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Disertante>
 *
 * @method Disertante|null find($id, $lockMode = null, $lockVersion = null)
 * @method Disertante|null findOneBy(array $criteria, array $orderBy = null)
 * @method Disertante[]    findAll()
 * @method Disertante[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DisertanteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Disertante::class);
    }

//    /**
//     * @return Disertante[] Returns an array of Disertante objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Disertante
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
