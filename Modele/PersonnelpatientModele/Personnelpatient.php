<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Personnelpatient{
    
    private $idpersonnelpatient;
    private $idpersonnel;
    private $idpatient;
    private $poids;
    private $temperature;
    private $tension;
    
    //le construceteur
    
    function __construct(array $donnee) {
        $this->hydrate($donnee);
    }
    
    //les getteurs
    
    function getIdpersonnelpatient() {
        return $this->idpersonnelpatient;
    }

    function getIdpersonnel() {
        return $this->idpersonnel;
    }

    function getIdpatient() {
        return $this->idpatient;
    }

    function getPoids() {
        return $this->poids;
    }

    function getTemperature() {
        return $this->temperature;
    }

    function getTension() {
        return $this->tension;
    }
    
    //les setteurs

    function setIdpersonnel($idpersonnel) {
        $this->idpersonnel = $idpersonnel;
    }

    function setIdpatient($idpatient) {
        $this->idpatient = $idpatient;
    }

    function setPoids($poids) {
        $this->poids = $poids;
    }

    function setTemperature($temperature) {
        $this->temperature = $temperature;
    }

    function setTension($tension) {
        $this->tension = $tension;
    }
    
    //la fonction hydrate
    
    public function hydrate(array $donnee){
        if(isset($donnee['idpersonnelpatient'])){
            $this->idpersonnelpatient = ($donnee['idpersonnelpatient']);
        }
        if(isset($donnee['idpersonnel'])){
            $this->idpersonnel = ($donnee['idpersonnel']);
        }if(isset($donnee['idpatient'])){
            $this->idpatient = ($donnee['idpatient']);
        }if(isset($donnee['poids'])){
            $this->poids = ($donnee['poids']);
        }
        if(isset($donnee['temperature'])){
            $this->temperature = ($donnee['temperature']);
        }if(isset($donnee['tension'])){
            $this->tension = ($donnee['tension']);
        
    }
    
        }
        



}