<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Recuconsultation{
    
    private $idrecuconsultation;
    private $idconsultation;
    private $idordonnance;
    private $idrecu;
    
    //le constructeur
    function __construct(array $donnee) {
        $this->hydrate($donnee);
                
    }
    
    //les getteurs
    function getIdrecuconsultation() {
        return $this->idrecuconsultation;
    }

    function getIdconsultation() {
        return $this->idconsultation;
    }
    function getIdordonnance() {
        return $this->idordonnance;
    }

    
    function getIdrecu() {
        return $this->idrecu;
    }
     //les setteurs


    function setIdconsultation($idconsultation) {
        $this->idconsultation = $idconsultation;
    }
    function setIdordonnance($idordonnance) {
        $this->idordonnance = $idordonnance;
    }

    
    function setIdrecu($idrecu) {
        $this->idrecu = $idrecu;
    }
    
    //la fonction hydrate
    
     public function hydrate(array $donnee){
        if(isset($donnee['idrecuconsultation'])){
            $this->idrecuconsultation = ($donnee['idrecuconsultation']);
        }
        if(isset($donnee['idconsultation'])){
            $this->idconsultation = ($donnee['idconsultation']);
        }if(isset($donnee['idordonance'])){
            $this->idordonance = ($donnee['idordonance']);
        }if(isset($donnee['idrecu'])){
            $this->idrecu = ($donnee['idrecu']);
        }
     }



}