<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Rendezvous{
    private $idrdv;
    private $idplagehoraire;
    private $titrerdv;
    private $datedebut;
    private $datefin;
    private $typeconsultation;
    
    //le constructeur
    
    public function __construct() {
        $this->hydrate($donnee);
    }
    //les getteurs
    function getIdrdv() {
        return $this->idrdv;
    }
    function getIdplagehoraire() {
        return $this->idplagehoraire;
    }

        function getTitrerdv() {
        return $this->titrerdv;
    }    

    function getDatedebut() {
        return $this->datedebut;
    }

    function getDatefin() {
        return $this->datefin;
    }

    function getTypeconsultation() {
        return $this->typeconsultation;
    }
//les setteurs
    
    function setIdplagehoraire($idplagehoraire) {
        $this->idplagehoraire = $idplagehoraire;
    }

        function setTitrerdv($titrerdv) {
        $this->titrerdv = $titrerdv;
    }

        function setDatedebut($datedebut) {
        $this->datedebut = $datedebut;
    }

    function setDatefin($datefin) {
        $this->datefin = $datefin;
    }

    function setTypeconsultation($typeconsultation) {
        $this->typeconsultation = $typeconsultation;
    }

//la fonction hydrate
    public function hydrate(array $donnee){
        if(isset($donnee['idrdv'])){
            $this->idrdv = ($donnee['idrdv']);
        }
        if(isset($donnee['idplagehoraire'])){
            $this->idplagehoraire = ($donnee['idplagehoraire']);
        }
        if(isset($donnee['titrerdv'])){
            $this->titrerdv = ($donnee['titrerdv']);
        }
        if(isset($donnee['datedebut'])){
            $this->datedebut = ($donnee['datedebut']);
        }
        if(isset($donnee['datefin'])){
            $this->datefin = ($donnee['datefin']);
        }
        if(isset($donnee['typeconsultation'])){
            $this->typeconsultation = ($donnee['typeconsultation']);
        }
    }
}