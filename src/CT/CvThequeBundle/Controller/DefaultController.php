<?php

namespace CT\CvThequeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CtCvThequeBundle:Default:index.html.twig', array('name' => $name));
    }
}
