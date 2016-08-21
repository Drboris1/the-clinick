<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Soinsinfirliers{
    private $idsoins;
    private $datesoins;
    private $libelesoins;
    
    //le constructeur
    function __construct(array $donnee) {
        $this->hydrate($donnee);
    }
    //les getteurs
    function getIdsoins() {
        return $this->idsoins;
    }

    function getDatesoins() {
        return $this->datesoins;
    }

    function getLibelesoins() {
        return $this->libelesoins;
    }
    
    //les setteurs

    function setDatesoins($datesoins) {
        $this->datesoins = $datesoins;
    }

    function setLibelesoins($libelesoins) {
        $this->libelesoins = $libelesoins;
    }
    //la fonction hydrate
    
     public function hydrate(array $donnee){
        if(isset($donnee['idsoins'])){
            $this->idsoins = ($donnee['idsoins']);
        }
        if(isset($donnee['datesoins'])){
            $this->datesoins = ($donnee['datesoins']);
        }if(isset($donnee['libelesoins'])){
            $this->libelesoins = ($donnee['libelesoins']);
        }
     }


    

    
}