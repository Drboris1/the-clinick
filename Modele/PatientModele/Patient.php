<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Patient{
    private $idpatient;
    private $idvaccin;
    private $idopration;
    private $nompatient;
    private $prenompatient;
    private $agepatient;
    private $sexepatient;
    private $professionpatient;
    private $situationmatrimoniale;
    private $telpatient;
    private $rh;
    private $gs;
    private $electrophorese;
    private $personneaprevenir;
    
    //le constructeur
    function __construct(array $donnee) {
        $this->hydrate($donnee);
    }

    //les getteurs
    function getIdpatient() {
        return $this->idpatient;
    }
    function getIdvaccin() {
        return $this->idvaccin;
    }

    function getIdopration() {
        return $this->idopration;
    }

    function getNompatient() {
        return $this->nompatient;
    }

    function getPrenompatient() {
        return $this->prenompatient;
    }

    function getAgepatient() {
        return $this->agepatient;
    }

    function getSexepatient() {
        return $this->sexepatient;
    }

    function getProfessionpatient() {
        return $this->prefessionpatient;
    }

    function getSituationmatrimoniale() {
        return $this->situationmatrimoniale;
    }

    function getTelpatient() {
        return $this->telpatient;
    }

    function getRh() {
        return $this->rh;
    }

    function getGs() {
        return $this->gs;
    }

    function getElectrophorese() {
        return $this->electrophorese;
    }

    function getPersonneaprevenir() {
        return $this->personneaprevenir;
    }
//fin des getteurs
    
    // les setteurs
    
    function setIdvaccin($idvaccin) {
        $this->idvaccin = $idvaccin;
    }

    function setIdopration($idopration) {
        $this->idopration = $idopration;
    }
    
    function setNompatient($nompatient) {
        $this->nompatient = $nompatient;
    }

    function setPrenompatient($prenompatient) {
        $this->prenompatient = $prenompatient;
    }

    function setAgepatient($agepatient) {
        $this->agepatient = $agepatient;
    }

    function setSexepatient($sexepatient) {
        $this->sexepatient = $sexepatient;
    }

    function setProfessionpatient($professionpatient) {
        $this->professionpatient = $professionpatient;
    }

    function setSituationmatrimoniale($situationmatrimoniale) {
        $this->situationmatrimoniale = $situationmatrimoniale;
    }

    function setTelpatient($telpatient) {
        $this->telpatient = $telpatient;
    }

    function setRh($rh) {
        $this->rh = $rh;
    }

    function setGs($gs) {
        $this->gs = $gs;
    }

    function setElectrophorese($electrophorese) {
        $this->electrophorese = $electrophorese;
    }

    function setPersonneaprevenir($personneaprevenir) {
        $this->personneaprevenir = $personneaprevenir;
    }
//fin des setteurs

    public function hydrate(array $donnee){
        if(isset($donnee['id_patient'])){
            $this->id_patient = ($donnee['id_patient']);
        }if(isset($donnee['idvaccin'])){
            $this->idvaccin = ($donnee['idvaccin']);
        }if(isset($donnee['idopration'])){
            $this->idopration = ($donnee['idopration']);
        }if(isset($donnee['nompatient'])){
            $this->nompatient = ($donnee['nompatient']);
        }if(isset($donnee['prenompatient'])){
            $this->prenompatient = ($donnee['prenompatient']);
        }if(isset($donnee['agepatient'])){
            $this->agepatient = ($donnee['agepatient']);
        }if(isset($donnee['sexepatient'])){
            $this->sexepatient = ($donnee['sexepatient']);
        }if(isset($donnee['professionpatient'])){
            $this->professionpatient = ($donnee['professionpatient']);
        }if(isset($donnee['situationmatrimoniale'])){
            $this->situationmatrimoniale = ($donnee['situationmatrimoniale']);
        }if(isset($donnee['telpatient'])){
            $this->telpatient = ($donnee['telpatient']);
        }if(isset($donnee['rh'])){
            $this->rh = ($donnee['rh']);
        }if(isset($donnee['gs'])){
            $this->gs = ($donnee['gs']);
        }if(isset($donnee['electrophorese'])){
            $this->electrophorese = ($donnee['electrophorese']);
        }if(isset($donnee['personneaprevenir'])){
            $this->personneaprevenir = ($donnee['personneaprevenir']);
        }
    
    }
}