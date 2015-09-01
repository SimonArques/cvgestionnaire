<?php

namespace AdminBundle\Util;

class Nav {

    public function getNav() {
        $nav = array("Parcourir" => "parcourir",
            "Rechercher" => "rechercher",
            "Supprimer" => "supprimer",
            "Afficher" => "afficher"
        );
        return $nav;
    }

}
