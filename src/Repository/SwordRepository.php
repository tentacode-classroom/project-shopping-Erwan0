<?php
namespace App\Repository;
use App\Entity\Sword;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
/**
 * @method Sword|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sword|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sword[]    findAll()
 * @method Sword[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SwordRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Sword::class);
    }
//    /**
//     * @return Boat[] Returns an array of Boat objects
//     */
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
            ;
    }
    /*
    public function findOneBySomeField($value): ?Sword
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}