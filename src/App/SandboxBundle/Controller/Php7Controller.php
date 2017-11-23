<?php

namespace App\SandboxBundle\Controller;

use App\Component\Php7\Car;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class Php7Controller extends Controller
{
    /**
     * @Route("/php7")
     */
    public function indexAction()
    {
        try {
            $car = new Car('Sedan');
            $car->setType(444);
            var_dump($car->getType());
        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }
        return $this->render('AppSandboxBundle:Php7:index.html.twig');
    }
}
