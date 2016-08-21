<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Lit{
    private $idlit;
    private $idchambre;
    private $caracteristiquelit;
    
    //le constructeur
    public function __construct(array $donnee = NULL) {
        $this->hydrate($donnee);
    }
    //lesgetteurs
    function getIdlit() {
        return $this->idlit;
    }
    function getIdchambre() {
        return $this->idchambre;
    }
    

    function getCaracteristiquelit() {
        return $this->caracteristiquelit;
    }

    //les setteurs
    function setIdchambre($idchambre) {
        $this->idchambre = $idchambre;
    }
    function setCaracteristiquelit($caracteristiquelit) {
        $this->caracteristiquelit = $caracteristiquelit;
    }

//la fonction hydrate
    
     public function hydrate(array $donnee = NULL){
        if(isset($donnee['idlit'])){
            $this->idlit = ($donnee['idlit']);
        }
         if(isset($donnee['idchambre'])){
            $this->idchambre = ($donnee['idchambre']);
        }
        if(isset($donnee['caracteristiquelit'])){
            $this->caracteristiquelit = ($donnee['caracteristiquelit']);
        }
     }
}