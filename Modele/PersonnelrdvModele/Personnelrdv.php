<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Personnelrdv{
    private $idpersonnelrdv;
    private $idpersonnel;
    private $idrdv;
    
    //le constructeur
    
    function __construct(array $donnee) {
        $this->hydrate($donnee);
    }
    
    //les getteurs
    
    function getIdpersonnelrdv() {
        return $this->idpersonnelrdv;
    }

    function getIdpersonnel() {
        return $this->idpersonnel;
    }

    function getIdrdv() {
        return $this->idrdv;
    }
    //les setteurs

    function setIdpersonnel($idpersonnel) {
        $this->idpersonnel = $idpersonnel;
    }

    function setIdrdv($idrdv) {
        $this->idrdv = $idrdv;
    }
    
    //la fonction hydrate
    
    public function hydrate(array $donnee){
        if(isset($donnee['idpersonnelrdv'])){
            $this->idpersonnelrdv = ($donnee['idpersonnelrdv']);
        }
        if(isset($donnee['idpersonnel'])){
            $this->idpersonnel = ($donnee['idpersonnel']);
        }if(isset($donnee['idrdv'])){
            $this->idrdv = ($donnee['idrdv']);
        }
    }



}