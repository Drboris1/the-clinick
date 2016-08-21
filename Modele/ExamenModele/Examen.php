<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Examen{
    private $idexamen;
    private $idcategorie;
    private $idconsultation;
    private $montantexam;
    private $dateexam;
    private $libeleexam;
    
    //le constructeur
    public function __construct(array $donnee) {
        $this->hydrate($donnee);
    }
    
    //les getteurs
    function getIdexamen() {
        return $this->idexamen;
    }
    function getIdcategorie() {
        return $this->idcategorie;
    }
    function getIdconsultation() {
        return $this->idconsultation;
    }

    function getMontantexam() {
        return $this->montantexam;
    }

    function getDateexam() {
        return $this->dateexam;
    }

    function getLibeleexam() {
        return $this->libeleexam;
    }
//les setteurs
    function setIdcategorie($idcategorie) {
        $this->idcategorie = $idcategorie;
    }
    function setIdconsultation($idconsultation) {
        $this->idconsultation = $idconsultation;
    }

    function setMontant($montantexam) {
        $this->montantexam = $montantexam;
    }

    function setDateexam($dateexam) {
        $this->dateexam = $dateexam;
    }

    function setLibeleexam($libeleexam) {
        $this->libeleexam = $libeleexam;
    }

//la fonction hydrate
    
    public function hydrate(array $donnee){
        if(isset($donnee['idexamen'])){
            $this->idexamen = ($donnee['idexamen']);
        }
        if(isset($donnee['idcategorie'])){
            $this->idcategorie = ($donnee['idcategorie']);
        }
        if(isset($donnee['idconsultation'])){
            $this->idconsultation = ($donnee['idconsultation']);
        }
        if(isset($donnee['montantexam'])){
            $this->montantexam = ($donnee['montantexam']);
        }
        if(isset($donnee['dateexam'])){
            $this->dateexam = ($donnee['dateexam']);
        }
        if(isset($donnee['libeleexam'])){
            $this->libeleexam = ($donnee['libeleexam']);
        }
    }
}