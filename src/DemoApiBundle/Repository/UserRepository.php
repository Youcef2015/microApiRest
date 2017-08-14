<?php
/**
 * Created by PhpStorm.
 * User: ylezghed
 * Date: 11/08/17
 * Time: 23:36
 */

namespace DemoApiBundle\Repository;


use DemoApiBundle\Entity\User;
use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    /**
     * @param User $user
     *
     * @return User
     */
    public function create(User $user)
    {
        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush($user);
        
        return $user;
    }

    public function edit(User $user)
    {
        $this->getEntityManager()->flush($user);

        return $user;
    }
    public function delete(User $user)
    {
        try {
            $this->getEntityManager()->remove($user);
            $this->getEntityManager()->flush();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}
