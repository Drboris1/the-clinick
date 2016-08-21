<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Personnelservice{
    
    private $idpersonnelservice;
    private $idpersonnel;
    private $idservice;
    
    //le constructeur
    
    function __construct(array $donnee = NULL) {
        $this->hydrate($donnee);
    }
    
    //les getteurs
    
    function getIdpersonnelservice() {
        return $this->idpersonnelservice;
    }

    function getIdpersonnel() {
        return $this->idpersonnel;
    }

    function getIdservice() {
        return $this->idservice;
    }
    
    //les setteurs

    function setIdpersonnel($idpersonnel) {
        $this->idpersonnel = $idpersonnel;
    }

    function setIdservice($idservice) {
        $this->idservice = $idservice;
    }
    
    //la fonction hydrate
    
    public function hydrate(array $donnee =  NULL){
        if(isset($donnee['idpersonnelservice'])){
            $this->idpersonnelservice = ($donnee['idpersonnelservice']);
        }
        if(isset($donnee['idpersonnel'])){
            $this->idpersonnel = ($donnee['idpersonnel']);
        }if(isset($donnee['idservice'])){
            $this->idservice = ($donnee['idservice']);
        }
    }



}