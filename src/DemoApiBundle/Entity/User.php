<?php
/**
 * Created by PhpStorm.
 * User: ylezghed
 * Date: 06/08/17
 * Time: 03:02
 */

namespace DemoApiBundle\Entity;

/**
 * Class User
 * @ExclusionPolicy("all")
 */
class User
{
    /**
     * @Expose
     */
    private $id;
    /**
     * @Expose
     */
    private $username;
    /**
     * @Expose
     */
    private $password;

    public function __construct($id, $username, $password)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
