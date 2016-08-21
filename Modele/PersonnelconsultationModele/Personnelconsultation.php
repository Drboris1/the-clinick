<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Personnelconsultation{
    
    private $idpersonnelconsult;
    private $idpersonnel;
    private $idconsultation;
    
    //le constructeur
    function __construct(array $donnee) {
        $this->hydrate($donnee);
    }
    
    //les getteurs
    
    function getIdpersonnelconsult() {
        return $this->idpersonnelconsult;
    }

    function getIdpersonnel() {
        return $this->idpersonnel;
    }

    function getIdconsultation() {
        return $this->idconsultation;
    }
    //les seteurs

    function setIdpersonnel($idpersonnel) {
        $this->idpersonnel = $idpersonnel;
    }

    function setIdconsultation($idconsultation) {
        $this->idconsultation = $idconsultation;
    }
    
    //la fonction hydrate
    
    public function hydrate(array $donnee){
        if(isset($donnee['idpersonnelconsult'])){
            $this->idpersonnelconsult = ($donnee['idpersonnelconsult']);
        }
        if(isset($donnee['idpersonnel'])){
            $this->idpersonnel = ($donnee['idpersonnel']);
        }if(isset($donnee['idconsultation'])){
            $this->idconsultation = ($donnee['idconsultation']);
        }
    }



    
}