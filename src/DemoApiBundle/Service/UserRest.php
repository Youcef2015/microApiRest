<?php
/**
 * Created by PhpStorm.
 * User: ylezghed
 * Date: 08/08/17
 * Time: 17:32
 */

namespace DemoApiBundle\Service;


use DemoApiBundle\Entity\User;

class UserRest
{
    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function addUser()
    {

    }
}
