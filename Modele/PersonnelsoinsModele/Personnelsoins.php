<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Personnelsoins{
    
    private $idpersonnelsoins;
    private $idpersonnel;
    private $idsoins;
    
    //le constructeur
    
    function __construct(array $donnee) {
        $this->hydrate($donnee);
    }
    
    //les getteurs
    function getIdpersonnelsoins() {
        return $this->idpersonnelsoins;
    }

    function getIdpersonnel() {
        return $this->idpersonnel;
    }

    function getIdsoins() {
        return $this->idsoins;
    }
    //les seteurs

    function setIdpersonnel($idpersonnel) {
        $this->idpersonnel = $idpersonnel;
    }

    function setIdsoins($idsoins) {
        $this->idsoins = $idsoins;
    }
    
    //la fonction hydrate
    public function hydrate(array $donnee){
        if(isset($donnee['idpersonnelsoins'])){
            $this->idpersonnelsoins = ($donnee['idpersonnelsoins']);
        }
        if(isset($donnee['idpersonnel'])){
            $this->idpersonnel = ($donnee['idpersonnel']);
        }if(isset($donnee['idsoins'])){
            $this->idsoins = ($donnee['idsoins']);
        }
    }



}