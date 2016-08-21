<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Journal{
    private $idjournal;
    private $idpersonnel;
    private $libelejournal;
    private $dateaction;
    
    //le constructeur
    public function __construct(array $donnee) {
        $this->hydrate($donnee);
    }
    
    //les getteurs
    

function getIdjournal() {
    return $this->idjournal;
}
    
function getIdpersonnel() {
    return $this->idpersonnel;
}
 function getLibelejournal() {
    return $this->libelejournal;
}

 function getDateaction() {
    return $this->dateaction;
}

 //lessetteurs
    
function setLibelejournal($libelejournal) {
    $this->idpersonnel = $libelejournal;
}
 function setLibelejournal($idpersonnel) {
    $this->libelejournal = $idpersonnel;
}
    

 function setDateaction($dateaction) {
    $this->dateaction = $dateaction;
}
//la fonction hydrate
public function hydrate(array $donnee){
        if(isset($donnee['idjournal'])){
            $this->idjournal = ($donnee['idjournal']);
        }
        if(isset($donnee['idpersonnel'])){
            $this->idpersonnel = ($donnee['idpersonnel']);
        }
        if(isset($donnee['libelejournal'])){
            $this->libelejournal = ($donnee['libelejournal']);
        }
        if(isset($donnee['dateaction'])){
            $this->dateaction = ($donnee['dateaction']);
        }
}
}

