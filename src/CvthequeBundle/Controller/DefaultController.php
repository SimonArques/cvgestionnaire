<?php

namespace CvthequeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CvthequeBundle\Util\Nav;
use CvthequeBundle\Entity\User;
use CvthequeBundle\Form\UserType;

class DefaultController extends Controller {

    public function indexAction() {
        $nav = new Nav();
        $nav = $nav->getNav();

        return $this->render('CvthequeBundle:Default:index.html.twig', array('nav' => $nav
        ));
    }

    public function identiteAction() {
        $nav = new Nav();
        $nav = $nav->getNav();

        return $this->render('CvthequeBundle:Default:identite.html.twig', array('nav' => $nav
        ));
    }

    public function experiencesAction() {
        $nav = new Nav();
        $nav = $nav->getNav();

        return $this->render('CvthequeBundle:Default:experiences.html.twig', array('nav' => $nav
        ));
    }

    public function competencesAction() {
        $nav = new Nav();
        $nav = $nav->getNav();

        return $this->render('CvthequeBundle:Default:competences.html.twig', array('nav' => $nav
        ));
    }

    public function formationAction() {
        $nav = new Nav();
        $nav = $nav->getNav();

        return $this->render('CvthequeBundle:Default:formation.html.twig', array('nav' => $nav
        ));
    }

    public function hobbiesAction() {
        $nav = new Nav();
        $nav = $nav->getNav();

        return $this->render('CvthequeBundle:Default:hobbies.html.twig', array('nav' => $nav
        ));
    }
    
    
 
    
    public function ajouterAction() {
        
        $en = $this->getDoctrine()->getManager();
        
        $form -> $this->createForm(New CvthequeBundle\Form\UserType());

        return $this->render('CvthequeBundle:Default:ajouter.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}
