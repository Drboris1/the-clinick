<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Recu{
    
    private $idrecu;
    private $idvaccin;
    private $numerorecu;
    private $datejour;
    private $libelerecu;
    private $montantprestation;
    
    //le constructeur
    function __construct(array $donnee) {
        $this->hydrate($donnee);
        
    }
    // les getteurs
    function getIdrecu() {
        return $this->idrecu;
    }

    function getIdvaccin() {
        return $this->idvaccin;
    }

    function getNumerorecu() {
        return $this->numerorecu;
    }

    function getDatejour() {
        return $this->datejour;
    }

    function getLibelerecu() {
        return $this->libelerecu;
    }

    function getMontantprestation() {
        return $this->montantprestation;
    }
    
    //les setteurs

    function setIdvaccin($idvaccin) {
        $this->idvaccin = $idvaccin;
    }

    function setNumerorecu($numerorecu) {
        $this->numerorecu = $numerorecu;
    }

    function setDatejour($datejour) {
        $this->datejour = $datejour;
    }

    function setLibelerecu($libelerecu) {
        $this->libelerecu = $libelerecu;
    }

    function setMontantprestation($montantprestation) {
        $this->montantprestation = $montantprestation;
    }
    
    //lafonction hydrate
    
     public function hydrate(array $donnee){
        if(isset($donnee['idrecu'])){
            $this->idrecu = ($donnee['idrecu']);
        }
        if(isset($donnee['idvaccin'])){
            $this->idvaccin = ($donnee['idvaccin']);
        }if(isset($donnee['numerorecu'])){
            $this->numerorecu = ($donnee['numerorecu']);
        }if(isset($donnee['datejour'])){
            $this->datejour = ($donnee['datejour']);
        }
        if(isset($donnee['libelerecu'])){
            $this->libelerecu = ($donnee['libelerecu']);
        }if(isset($donnee['montantprestation'])){
            $this->montantprestation = ($donnee['montantprestation']);
        }
     }


    

    
}