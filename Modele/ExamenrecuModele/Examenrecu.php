<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Examenrecu{
    private $idexamenrecu;
    private $idrecu;
    private $idcategorie;
    private $idexamen;
    
    //le constructeur
    
    function __construct(aray $donnee) {
        $this->hydrate($donnes);
    }
    
    
   //les getteurs
   function getIdexamenrecu() {
       return $this->idexamenrecu;
   }

   function getIdrecu() {
       return $this->idrecu;
   }

   function getIdcategorie() {
       return $this->idcategorie;
   }

   function getIdexamen() {
       return $this->idexamen;
   }
   
   //les setteurs


   function setIdrecu($idrecu) {
       $this->idrecu = $idrecu;
   }

   function setIdcategorie($idcategorie) {
       $this->idcategorie = $idcategorie;
   }

   function setIdexamen($idexamen) {
       $this->idexamen = $idexamen;
   }
   
   //la fonction hydrate
   
   public function hydrate(array $donnee){
        if(isset($donnee['idexamenrecu'])){
            $this->idexamenrecu = ($donnee['idexamenrecu']);
        }
        if(isset($donnee['idrecu'])){
            $this->idrecu = ($donnee['idrecu']);
        }if(isset($donnee['idcategorie'])){
            $this->idcategorie = ($donnee['idcategorie']);
        }if(isset($donnee['idexamen'])){
            $this->idexamen = ($donnee['idexamen']);
        }
   }



}