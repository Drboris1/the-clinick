<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Carnet{
    private $idcarnet;
    private $numerocarnet;
    private $motifpresence;
    
    //le constructeur
    function __construct(array $donnee) {
        $this->hydrate($donnee);
    }

    //les getteurs
    function getIdcarnet() {
        return $this->idcarnet;
    }

    function getNumerocarnet() {
        return $this->numerocarnet;
    }

    function getMotifpresence() {
        return $this->motifpresence;
    }

    //les setteurs
    function setIdcarnet($idcarnet) {
        $this->idcarnet = $idcarnet;
    }

    function setNumerocarnet($numerocarnet) {
        $this->numerocarnet = $numerocarnet;
    }

    function setMotifpresence($motifpresence) {
        $this->motifpresence = $motifpresence;
    }

public function hydrate(array $donnee){
        if(isset($donnee['idcarnet'])){
            $this->idcarnet = ($donnee['idcarnet']);
        }if(isset($donnee['numerocarnet'])){
            $this->numerocarnet = ($donnee['numerocarnet']);
        }if(isset($donnee['motifpresence'])){
            $this->motifpresence = ($donnee['motifpresence']);
        }
}
}