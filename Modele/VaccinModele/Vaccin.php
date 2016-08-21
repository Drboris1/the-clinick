<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Vaccin{
    
    private $idvaccin;
    private $idcarnet;
    private $idrecu;
    private $numvaccin;
    private $libellevaccin;
    private $datevaccin;
    private $maladieaeviter;
    
    //le constructeur
    public function __construct(array $donnee) {
        $this->hydrate($donnee);
    }
    //les getteurs
    function getIdvaccin() {
        return $this->idvaccin;
    }

    function getIdcarnet() {
        return $this->idcarnet;
    }

    function getIdrecu() {
        return $this->idrecu;
    }

    function getNumvaccin() {
        return $this->numvaccin;
    }

    function getLibellevaccin() {
        return $this->libellevaccin;
    }

    function getDatevaccin() {
        return $this->datevaccin;
    }

    function getMaladieaeviter() {
        return $this->maladieaeviter;
    }
    
    //les setteurs

    function setIdcarnet($idcarnet) {
        $this->idcarnet = $idcarnet;
    }

    function setIdrecu($idrecu) {
        $this->idrecu = $idrecu;
    }

    function setNumvaccin($numvaccin) {
        $this->numvaccin = $numvaccin;
    }

    function setLibellevaccin($libellevaccin) {
        $this->libellevaccin = $libellevaccin;
    }

    function setDatevaccin($datevaccin) {
        $this->datevaccin = $datevaccin;
    }

    function setMaladieaeviter($maladieaeviter) {
        $this->maladieaeviter = $maladieaeviter;
    }

        //la fonction hydrate
    
public function hydrate(array $donnee){
        if(isset($donnee['idvaccin'])){
            $this->idvaccin = ($donnee['idvaccin']);
        }
        if(isset($donnee['idcarnet'])){
            $this->idcarnet = ($donnee['idcarnet']);
        }
        if(isset($donnee['idrecu'])){
            $this->idrecu = ($donnee['idrecu']);
        }
        if(isset($donnee['numvaccin'])){
            $this->numvaccin = ($donnee['numvaccin']);
        }
        if(isset($donnee['libelevaccin'])){
            $this->libelevaccin = ($donnee['libelevaccin']);
        }
        if(isset($donnee['datevaccin'])){
            $this->datevaccin = ($donnee['datevaccin']);
        }
        if(isset($donnee['maladieaeviter'])){
            $this->maladieaeviter = ($donnee['maladieaeviter']);
        }
}

}