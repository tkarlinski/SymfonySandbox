<?php

namespace App\SandboxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/post/hello-world")
     */
    public function indexAction()
    {
        return $this->render('AppSandboxBundle:Default:index.html.twig');
    }
}
