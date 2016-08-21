<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class blockoperatoire{
   
    private $idoperation;
    private $dateentree;
    private $motifperation;
    private $etatsante;
    private $datesortie;
    
    //le constructeur
    
    function __construct(array $donnee) {
        $this->hydrate($donnee);
    }

    //les guetteurs
    
    function getIdoperation() {
        return $this->idoperation;
    }

    function getDateentree() {
        return $this->dateentree;
    }

    function getMotifperation() {
        return $this->motifperation;
    }

    function getEtatsante() {
        return $this->etatsante;
    }

    function getDatesortie() {
        return $this->datesortie;
    }
    
    //les setteurs

    function setDateentree($dateentree) {
        $this->dateentree = $dateentree;
    }

    function setMotifperation($motifperation) {
        $this->motifperation = $motifperation;
    }

    function setEtatsante($etatsante) {
        $this->etatsante = $etatsante;
    }

    function setDatesortie($datesortie) {
        $this->datesortie = $datesortie;
    }
    
    //la fonction hydrate
    
   public function hydrate(array $donnee){
        if(isset($donnee['idoperation'])){
            $this->idoperation = ($donnee['idoperation']);
        }if(isset($donnee['dateentree'])){
            $this->dateentree = ($donnee['dateentree']);
        }if(isset($donnee['motifperation'])){
            $this->motifperation = ($donnee['motifperation']);
        }if(isset($donnee['etatsante'])){
            $this->etatsante = ($donnee['etatsante']);
        }if(isset($donnee['datesortie'])){
            $this->datesortie = ($donnee['datesortie']);
        }
   }


}