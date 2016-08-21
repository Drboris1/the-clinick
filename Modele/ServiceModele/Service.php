<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Service{
    private $idservice;
    private $nomservice;
    
    
    //le constructeur
    public function __construct(array $donnee = null) {
        $this->hydrate($donnee);
    }
   //les getteur
   function getIdservice() {
       return $this->idservice;
   }
   
    function getNomservice() {
       return $this->nomservice;
   }
   
   //les setteurs

   function setNomservice($nomservice) {
       $this->nomservice = $nomservice;
   }
   
   //la fonction hydrate
   public function hydrate(array $donnee = null){
        if(isset($donnee['idservice'])){
            $this->idservice = ($donnee['idservice']);
        }
        if(isset($donnee['nomservice'])){
            $this->nomservice = ($donnee['nomservice']);
        }
   }

}