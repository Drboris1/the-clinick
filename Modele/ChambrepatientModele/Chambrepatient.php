<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class chambrepatient{
    
    private $idchambrepatient;
    private $idchambre;
    private $idpatient;
    
    //le constructeur
    
    function __construct(array $donnee) {
        $this->hydrate($donnee);
        
    }
    //les guetteurs
    function getIdchambrepatient() {
        return $this->idchambrepatient;
    }

    function getIdchambre() {
        return $this->idchambre;
    }

    function getIdpatient() {
        return $this->idpatient;
    }
    
    //les setteurs

    function setIdchambre($idchambre) {
        $this->idchambre = $idchambre;
    }

    function setIdpatient($idpatient) {
        $this->idpatient = $idpatient;
    }
    
    
    //la fonction hydrate
    
    public function hydrate(array $donnee){
        if(isset($donnee['idchambrepatient'])){
            $this->idchambrepatient = ($donnee['idchambrepatient']);
        }
        if(isset($donnee['idchambre'])){
            $this->idchambre = ($donnee['idchambre']);
        }if(isset($donnee['idpatient'])){
            $this->idpatient = ($donnee['idpatient']);
        }
    }



}