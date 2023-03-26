<?php

namespace App\Repository;

use App\Entity\InformationNutritionnelle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<InformationNutritionnelle>
 *
 * @method InformationNutritionnelle|null find($id, $lockMode = null, $lockVersion = null)
 * @method InformationNutritionnelle|null findOneBy(array $criteria, array $orderBy = null)
 * @method InformationNutritionnelle[]    findAll()
 * @method InformationNutritionnelle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InformationNutritionnelleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InformationNutritionnelle::class);
    }

    public function save(InformationNutritionnelle $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(InformationNutritionnelle $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return InformationNutritionnelle[] Returns an array of InformationNutritionnelle objects
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

//    public function findOneBySomeField($value): ?InformationNutritionnelle
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
