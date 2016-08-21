<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class personnel{
    private $idperso;
    private $nomperso;
    private $prenomperso;
    private $telperso;
    private $matriculeperso;
    private $ageperso;
    private $sexeperso;
    private $datepriseservice;
    private $emailperso;
    private $typeperso;
    private $specialite;
    private $idservice;

    function getIdservice() {
        return $this->idservice;
    }

    function setIdservice($idservice) {
        $this->idservice = $idservice;
    }

    
    //le constructeur
    function __construct(array $donnee = NULL) {
        $this->hydrate($donnee); 
    }
    
    //les guetteurs
    
    function getIdperso() {
        return $this->idperso;
    }

    function getNomperso() {
        return $this->nomperso;
    }

    function getPrenomperso() {
        return $this->prenomperso;
    }

    function getTelperso() {
        return $this->telperso;
    }

    function getMatriculeperso() {
        return $this->matriculeperso;
    }

    function getAgeperso() {
        return $this->ageperso;
    }

    function getSexeperso() {
        return $this->sexeperso;
    }

    function getDatepriseservice() {
        return $this->datepriseservice;
    }

    function getEmailperso() {
        return $this->emailperso;
    }

    function getTypeperso() {
        return $this->typeperso;
    }

    function getSpecialite() {
        return $this->specialite;
    }
    

    //les setteurs

    function setNomperso($nomperso) {
        $this->nomperso = $nomperso;
    }

    function setPrenomperso($prenomperso) {
        $this->prenomperso = $prenomperso;
    }

    function setTelperso($telperso) {
        $this->telperso = $telperso;
    }

    function setMatriculeperso($matriculeperso) {
        $this->matriculeperso = $matriculeperso;
    }

    function setAgeperso($ageperso) {
        $this->ageperso = $ageperso;
    }

    function setSexeperso($sexeperso) {
        $this->sexeperso = $sexeperso;
    }

    function setDatepriseservice($datepriseservice) {
        $this->datepriseservice = $datepriseservice;
    }

    function setEmailperso($emailperso) {
        $this->emailperso = $emailperso;
    }

    function setTypeperso($typeperso) {
        $this->typeperso = $typeperso;
    }

    function setSpecialite($specialite) {
        $this->specialite = $specialite;
    }
    


    //la fonction hydrate
    
    public function hydrate(array $donnee = NULL){
        if(isset($donnee['idperso'])){
            $this->idperso = ($donnee['idperso']);
        }if(isset($donnee['nomperso'])){
            $this->nomperso = ($donnee['nomperso']);
        }if(isset($donnee['prenomperso'])){
            $this->prenomperso = ($donnee['prenomperso']);
        }if(isset($donnee['telperso'])){
            $this->telperso = ($donnee['telperso']);
        }if(isset($donnee['matriculeperso'])){
            $this->matriculeperso = ($donnee['matriculeperso']);
        }if(isset($donnee['ageperso'])){
            $this->ageperso = ($donnee['ageperso']);
        }if(isset($donnee['sexeperso'])){
            $this->sexeperso = ($donnee['sexeperso']);
        }if(isset($donnee['datepriseservice'])){
            $this->datepriseservice = ($donnee['datepriseservice']);
        }if(isset($donnee['emailperso'])){
            $this->emailperso = ($donnee['emailperso']);
        }if(isset($donnee['typeperso'])){
            $this->typeperso = ($donnee['typeperso']);
        }if(isset($donnee['specialite'])){
            $this->specialite = ($donnee['specialite']);
        }if(isset($donnee['idservice'])){
            $this->idservice = ($donnee['idservice']);
        }
       
    
    }



}