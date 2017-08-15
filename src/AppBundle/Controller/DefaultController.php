<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Comment;
use AppBundle\Entity\Post;
use DemoApiBundle\Form\UserType;
use Doctrine\ORM\Query\AST\Join;
use Doctrine\ORM\Query\Lexer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }

    /**
     * @Route("/add/user", name="homepage")
     */
    public function addUserAction(Request $request)
    {
        $form = $this->createForm(new UserType());

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();

        }
        return $this->render('default/add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/tag", name="tag_test")
     */
    public function tagsAction()
    {


    }
}
