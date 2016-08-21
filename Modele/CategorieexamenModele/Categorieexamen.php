<?php

class Categorieexamen{
    
     private $idcategorie;
     private $libelecategorie;


     //le constructeur
    public function __construct(array $donnee) {
        $this->hydrate($donnee);
    }
    
    //debut des getteurs
    public function idcategorie(){
        return $this->idcategorie;
    }
    public function libelecategorie(){
        return $this->libelecategorie;
    }
    //pas de setteur ici
    
    // la fonction hydrate
    public function hydrate(array $donnee){
        if(isset($donnee['idcategorie'])){
            $this->idcategorie = ($donnee['idcategorie']);
        }if(isset($donnee['libelecategorie'])){
            $this->libelecategorie = ($donnee['libelecategorie']);
        }
    }
}


