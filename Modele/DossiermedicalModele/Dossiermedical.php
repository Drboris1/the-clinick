<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Dossiermedical{
    private $idmedical;
    private $idcarnet;
    private $libeledossier;
    private $datedebutconsult;
    private $antecedants;
    
    //le construceteur
    
    public function __construct(array $donnee) {
        $this->hydrate($donnee);
    }
    
    //les guetteurs
    function getIdmedical() {
        return $this->idmedical;
    }
    function getIdcarnetl() {
        return $this->idcarnet;
    }

    function getLibeledossier() {
        return $this->libeledossier;
    }

    function getDatedebutconsult() {
        return $this->datedebutconsult;
    }

    function getAntecedants() {
        return $this->antecedants;
    }
//les setteurs
    function setIdmediczl($idmedical) {
        $this->idmedical = $idmedical;
    }

    function setLibeledossier($libeledossier) {
        $this->libeledossier = $libeledossier;
    }

    function setDatedebutconsult($datedebutconsult) {
        $this->datedebutconsult = $datedebutconsult;
    }

    function setAntecedants($antecedants) {
        $this->antecedants = $antecedants;
    }

//la fonction hydrate
    public function hydrate(array $donnee){
        if(isset($donnee['idmedical'])){
            $this->idmedical = ($donnee['idmedical']);
        }
        if(isset($donnee['idcarnet'])){
            $this->idcarnet = ($donnee['idcarnet']);
        }
        if(isset($donnee['libeledossier'])){
            $this->libeledossier = ($donnee['libeledossier']);
        }
        if(isset($donnee['datedebutconsult'])){
            $this->datedebutconsult = ($donnee['datedebutconsult']);
        }
        if(isset($donnee['antecedants'])){
            $this->antecedants = ($donnee['antecedants']);
        }
        
}
}