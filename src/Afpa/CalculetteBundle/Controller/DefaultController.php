<?php

namespace Afpa\CalculetteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    
    public function jsonAction($id)
    {
       $request = $this->getRequest();
       $tag = $request->query->get('tag');
       $lang = $request->getPreferredLanguage();


       $response = new Response;
       $response->setContent('ok');
       // json_encode(array('id' => $id, 'text' => 'francois', 'query_string' => $tag, 'language'=> $lang)));
       // $response->headers->set('Content-Type', 'application/json');
       $response->setStatusCode(404);
       return $response;
    }


    public function calculAction($a, $b)
    {
    	$request = $this->getRequest();
    	$operateur = $request->query->get('operateur');

        switch ($operateur) {
        	case 'addition':
        		$result = $a + $b;
        		break;

        	case 'soustraction':
        		$result = $a - $b;
        		break;
        	
        	case 'division':
        		$result = $a / $b;
        		break;

        	case 'multiplication':
        		$result = $a * $b;
        		break;
        	
        	default:
                throw $this->createNotFoundException("L'operateur est invalide");
        		break;
        }
        
        return $this->render('AfpaCalculetteBundle:Default:result.html.twig', array('result' => $result));
    }

    public function fibonacciAction($number)
    {
        $fib = $this->get('fibonacci');
        $result = $fib->get($number);
        return $this->render('AfpaCalculetteBundle:Default:result.html.twig', array('result' => $result));
    }
}
