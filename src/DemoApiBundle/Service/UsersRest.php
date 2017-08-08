<?php
/**
 * Created by PhpStorm.
 * User: ylezghed
 * Date: 06/08/17
 * Time: 19:09
 */

namespace DemoApiBundle\Service;


use DemoApiBundle\Entity\User;
use DemoApiBundle\Entity\Users;

class UsersRest
{
    public $users;

    public function __construct(Users $users)
    {
        $this->users = $users;
    }

    public function AddUsers()
    {
        $user1 = new User(1, 'test1', 'password1');
        $user2 = new User(2, 'test2', 'password2');
        $user3 = new User(3, 'test3', 'password3');

        $this->users->addUser($user1);
        $this->users->addUser($user2);
        $this->users->addUser($user3);
    }

    public function getUsers()
    {
        return $this->users->getUsers();
    }
}
