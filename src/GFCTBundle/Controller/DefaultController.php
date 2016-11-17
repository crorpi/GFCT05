<?php

namespace GFCTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GFCTBundle:Default:index.html.twig');
    }

    public function nombreAction($nPila){

    	return $this->render('GFCTBundle:Default:nombre.html.twig',array('nPila'=>$nPila));
    }
}
