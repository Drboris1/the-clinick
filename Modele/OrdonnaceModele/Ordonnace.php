<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Ordonnace{
    private $idordonnace;
    private $idconsultaion;
    private $titreordo;
    private $dateordo;
    private $descriptionordo;
    
    //le constructeur
    public function __construct(array $donnee) {
        $this->hydrate($donnee);
    }
    
    //les guetteurs
    function getIdordonnace() {
        return $this->idordonnace;
    }
    function getIdconsultation() {
        return $this->idconsultation;
    }

    function getTitreordo() {
        return $this->titreordo;
    }

    function getDateordo() {
        return $this->dateordo;
    }

    function getDescriptionordo() {
        return $this->descriptionordo;
    }
//les setteurs
    
    function setIdconsultation($idconsultation) {
        $this->idconsultation = $idconsultation;
    }
    function setTitreordo($titreordo) {
        $this->titreordo = $titreordo;
    }

    function setDateordo($dateordo) {
        $this->dateordo = $dateordo;
    }

    function setDescriptionordo($descriptionordo) {
        $this->descriptionordo = $descriptionordo;
    }

    //la foction hydrate
    
     public function hydrate(array $donnee){
        if(isset($donnee['idordonnace'])){
            $this->idordonnace = ($donnee['idordonnace']);
        }
         if(isset($donnee['idconsultation'])){
            $this->idconsultation = ($donnee['idconsultation']);
        }
        if(isset($donnee['titreordo'])){
            $this->titreordo = ($donnee['titreordo']);
        }
        if(isset($donnee['dateordo'])){
            $this->dateordo = ($donnee['dateordo']);
        }
        if(isset($donnee['descriptionordo'])){
            $this->descriptionordo = ($donnee['descriptionordo']);
        }
     }

}