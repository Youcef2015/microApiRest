<?php

namespace DemoApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @return array
     */
    public function getUserAction()
    {
        /**
         * @$userRest UsersRest
         */
        $userRest = $this->container->get('user.rest');

        return [
            'users' => ['id' => 1, 'name' => 'youcef']
        ];
    }
}
