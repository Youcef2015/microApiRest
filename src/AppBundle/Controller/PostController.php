<?php
/**
 * Created by PhpStorm.
 * User: ylezghed
 * Date: 17/07/17
 * Time: 12:05
 */

namespace AppBundle\Controller;


use FOS\RestBundle\FOSRestBundle;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route as Route;

class PostController extends FOSRestBundle implements ClassResourceInterface
{
    /**
     * @Rest\View()
     */
    public function cgetAction()
    {
        return $this->getDoctrine()->getRepository('AppBundle:Post')->findAll();
    }
}
