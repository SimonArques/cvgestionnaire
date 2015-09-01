<?php

namespace CT\CvThequeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CtCvThequeBundle:Default:index.html.twig');
    }
    
    public function experiencesAction(){
        
        return $this->render('CtCvThequeBundle:Default:experiences.html.twig');
    }
    
    public function identiteAction(){
        
        return $this->render('CtCvThequeBundle:Default:identite.html.twig');
    }
    
    public function competencesAction(){
        
        return $this->render('CtCvThequeBundle:Default:competences.html.twig');
    }
}
