<?php

namespace AppBundle\Repository;

/**
 * UsersRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;

class UsersRepository extends \Doctrine\ORM\EntityRepository implements UserLoaderInterface
{
    public function loadUserByUsername($username)
    {
        return $this->createQueryBuilder('u')
            ->where('u.username = :username OR u.email = :email')
            ->setParameter('username', $username)
            ->setParameter('email', $username)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
