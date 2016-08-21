<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Patientsoins{
    
    private $idpatientsoin;
    private $idpatient;
    private $idsoins;
    
    //le constructeur
    
    function __construct(array $donnee) {
        $this->hydrate($donnee);
    }
    
    //le getteur
    
    function getIdpatientsoin() {
        return $this->idpatientsoin;
    }

    function getIdpatient() {
        return $this->idpatient;
    }

    function getIdsoins() {
        return $this->idsoins;
    }
    
    //les seteurs

    function setIdpatient($idpatient) {
        $this->idpatient = $idpatient;
    }

    function setIdsoins($idsoins) {
        $this->idsoins = $idsoins;
    }
    
    //la fonction hydrate
public function hydrate(array $donnee){
    if(isset($donnee['idpatientsoin'])){
            $this->idpatientsoin = ($donnee['idpatientsoin']);
        }
        if(isset($donnee['idpatient'])){
            $this->idpatient = ($donnee['idpatient']);
        }
        if(isset($donnee['idsoins'])){
            $this->idsoins = ($donnee['idsoins']);
        }
}


}