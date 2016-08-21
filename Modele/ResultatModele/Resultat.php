<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Resultat{
    private $idresultat;
    private $idexamen;
    private $libeleresultat;
    private $dateresultat;
    
    //le constructeur
    
    public function __construct() {
        $this->hydrate($donnee);
    }
    //les getteurs
    function getIdresultat() {
        return $this->idresultat;
    }
    function getIdexamen() {
        return $this->idexamen;
    }

    
    function getLibeleresultat() {
        return $this->libeleresultat;
    }

    function getDateresultat() {
        return $this->dateresultat;
    }
    //les setteurs

    function setIdexamen($idexamen) {
        $this->idexamen = $idexamen;
    }

        function setLibeleresultat($libeleresultat) {
        $this->libeleresultat = $libeleresultat;
    }

    function setDateresultat($dateresultat) {
        $this->dateresultat = $dateresultat;
    }
    //la fonction hydrate
    public function hydrate(array $donnee){
        if(isset($donnee['idresultat'])){
            $this->idresultat = ($donnee['idresultat']);
        }
        if(isset($donnee['idexamen'])){
            $this->idexamen = ($donnee['idexamen']);
        }
        if(isset($donnee['libeleresultat'])){
            $this->libeleresultat = ($donnee['libeleresultat']);
        }
        if(isset($donnee['dateresultat'])){
            $this->dateresultat = ($donnee['dateresultat']);
        }
    }


}