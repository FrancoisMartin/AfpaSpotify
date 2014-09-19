<?php

namespace Afpa\ColorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($color, $name)
    {
        $blue = rand(0,255);
        $green = rand(0,255);
        $red = rand(0,255);

        return $this->render('AfpaColorBundle:Default:index.html.twig', array('name' => $name, 'blue' => $blue, 'green' => $green, 'red' => $red));
    }


    public function profileAction($color, $name)
    {
        $blue = rand(0,255);
        $green = rand(0,255);
        $red = rand(0,255);

        return $this->render('AfpaColorBundle:Default:index.html.twig', array('name' => $name, 'blue' => $blue, 'green' => $green, 'red' => $red));
    }

    private function slowdown(){
    	for($i = 0; $i < 1000000; $i++){
    		base64_encode('text');
    	}
    }
}
