<?php
/**
 * Created by PhpStorm.
 * User: ylezghed
 * Date: 08/08/17
 * Time: 17:32
 */

namespace DemoApiBundle\Service;


use DemoApiBundle\Entity\User;
use DemoApiBundle\Repository\UserRepository;

class UserRest
{
    /**
     * @var UserRepository $userRepository
     */
    public $userRepository;
    

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @return array
     */
    public function getAllUser()
    {
        return $this->userRepository->findAll();
    }

    /**
     * @param $id
     *
     * @return null|object
     */
    public function getUserById($id)
    {
        return $this->userRepository->find($id);
    }

    /**
     * @param User $user
     *
     * @return User
     */
    public function create(User $user)
    {
        $this->userRepository->create($user);
    }

    public function edit(User $user)
    {
        $this->userRepository->edit($user);
    }
    public function delete(User $user)
    {
        $this->userRepository->delete($user);
    }
}
