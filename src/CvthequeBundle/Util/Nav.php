<?php

namespace CvthequeBundle\Util;

class Nav
{
	    public function getNav(){
    	$nav = array("A propos de vous" => "identite",
	    	"Expériences" => "experiences",
	    	"Compétences" => "competences",
	    	"Formation" => "formation",
	    	"Hobbies" => "hobbies",
	    	"Porfolio" => "portfolio");
    	return $nav;
    }
}