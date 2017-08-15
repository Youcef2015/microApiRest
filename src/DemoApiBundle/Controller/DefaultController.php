<?php

namespace DemoApiBundle\Controller;

use DemoApiBundle\Entity\User;
use DemoApiBundle\Service\UserRest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use FOS\RestBundle\Util\Codes;

class DefaultController extends FOSRestController
{
    /**
     * Get Json User[]
     *
     * @throws NotFoundHttpException when users not exist
     */
    public function getUsersAction()
    {
        /**
         * @var $userRest UserRest
         */
        $userRest = $this->container->get('user.rest');

        $users = $userRest->getAllUser();

        if(count($users) == 0) {
            throw new NotFoundHttpException(sprintf('The users not found.'));
        }

        return $this->container->get('jms_serializer')->serialize($users, 'json');

    }

    /**
     * Get single  Json User.
     * @var int $id
     * @throws NotFoundHttpException when user not exist
     */
    public function getUserAction($id)
    {
        /**
         * @var $userRest UserRest
         */
        $userRest = $this->container->get('user.rest');
        $user = $userRest->getUserById($id);

        if(count($user) < 1) {
            throw new NotFoundHttpException(sprintf('The user have an id \'%s\' was not found.',$id));
        }

        return $this->container->get('jms_serializer')->serialize($user, 'json');
    }

    /**
     * @return \FOS\RestBundle\View\View
     * @throws \Exception
     * @internal param array $data
     */
    public function addUserAction(User $user)
    {
        try {
            /**
             * @var $userRest UserRest
             */
            $userRest = $this->container->get('user.rest');
            $userRest->create($user);

            $routeOptions = array(
                'id' => $user->getId(),
            );

            return $this->routeRedirectView('get_users', $routeOptions, Codes::HTTP_CREATED);

        } catch (\Exception $e) {
            throw new  \Exception (sprintf('Data Has not submited.'));
        }

    }
}
