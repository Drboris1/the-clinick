<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Consultation{
    
    private $idconsultation;
    private $idcarnet;
    private $idpatient;
    private $numeroconsult;
    private $diagnostic;
    private $dateconsult;
    
    
    // le constructeur
    // le constructeur
    function __construct(array $donnee) {
        $this->hydrate($donnee);
    }
    
    //les getteurs
    function getIdconsultation() {
        return $this->idconsultation;
    }

    function getIdcarnet() {
        return $this->idcarnet;
    }

    function getIdpatient() {
        return $this->idpatient;
    }

    function getNumeroconsult() {
        return $this->numeroconsult;
    }

    function getDiagnostic() {
        return $this->diagnostic;
    }

    function getDateconsult() {
        return $this->dateconsult;
    }
    
    //les setteurs

    function setIdcarnet($idcarnet) {
        $this->idcarnet = $idcarnet;
    }

    function setIdpatient($idpatient) {
        $this->idpatient = $idpatient;
    }

    function setNumeroconsult($numeroconsult) {
        $this->numeroconsult = $numeroconsult;
    }

    function setDiagnostic($diagnostic) {
        $this->diagnostic = $diagnostic;
    }

    function setDateconsult($dateconsult) {
        $this->dateconsult = $dateconsult;
    }
    
    // la fonction hydrate
    
    public function hydrate(array $donnee){
        if(isset($donnee['idconsultation'])){
            $this->idconsultation = ($donnee['idconsultation']);
        }
        if(isset($donnee['idcarnet'])){
            $this->idcarnet = ($donnee['idcarnet']);
        }if(isset($donnee['idpatient'])){
            $this->idpatient = ($donnee['idpatient']);
        }if(isset($donnee['numeroconsult'])){
            $this->numeroconsult = ($donnee['numeroconsult']);
        }
        if(isset($donnee['diagnostic'])){
            $this->diagnostic = ($donnee['diagnostic']);
        }if(isset($donnee['dateconsult'])){
            $this->dateconsult = ($donnee['dateconsult']);
        }
   }


}


    