<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AdminBundle\Util\Nav;

class DefaultController extends Controller
{
    public function indexAdminAction()
    {
        $nav = new Nav();
        $nav = $nav->getNav();
        
        return $this->render('AdminBundle:Default:indexAdmin.html.twig', array('nav' => $nav));
    }
    
    public function afficherAction()
    {
        $nav = new Nav();
        $nav = $nav->getNav();
        
        return $this->render('AdminBundle:Default:afficher.html.twig', array('nav' => $nav));
    }
    
    public function parcourirAction()
    {
        $nav = new Nav();
        $nav = $nav->getNav();
        
        return $this->render('AdminBundle:Default:parcourir.html.twig', array('nav' => $nav));
    }
    
    public function rechercherAction()
    {
        $nav = new Nav();
        $nav = $nav->getNav();
        
        return $this->render('AdminBundle:Default:rechercher.html.twig', array('nav' => $nav));
    }
    
    public function supprimerAction()
    {
        $nav = new Nav();
        $nav = $nav->getNav();
        
        return $this->render('AdminBundle:Default:supprimer.html.twig', array('nav' => $nav));
    }
}
