<?php
/**
 * Created by PhpStorm.
 * User: ylezghed
 * Date: 06/08/17
 * Time: 03:03
 */

namespace DemoApiBundle\Entity;

/**
 * Class Users
 * @ExclusionPolicy("all")
 */
class Users
{
    /**
     * @Expose
     */
    public $users;

    public function addUser(User $user)
    {
        $this->users[] = $user;
    }

    public function getUsers()
    {
        return $this->users;
    }
}
