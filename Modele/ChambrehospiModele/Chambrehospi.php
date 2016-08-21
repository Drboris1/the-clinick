<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Chambrehospi{
    private $idchambre;
    private $numchambre;
    private $typchambre;
    private $numtel;
    private $nbrelit;
    private $etatoccupation;
    private $prixchambre;
    private $datentree;
    private $datsortie;
    
    //le constructeur
    function __construct(array $donnee = NULL) {
        $this->hydrate($donnee);
    }
    
    //les getteurs
    function getIdchambre() {
        return $this->idchambre;
    }

    function getNumchambre() {
        return $this->numchambre;
    }

    function getTypchambre() {
        return $this->typchambre;
    }

    function getNumtel() {
        return $this->numtel;
    }

    function getNbrelit() {
        return $this->nbrelit;
    }

    function getEtatoccupation() {
        return $this->etatoccupation;
    }

    function getPrixchambre() {
        return $this->prixchambre;
    }

    function getDatentree() {
        return $this->datentree;
    }

    function getDatsortie() {
        return $this->datsortie;
    }

    //les setteurs
  
    function setNumchambre($numchambre) {
        $this->numchambre = $numchambre;
    }

    function setTypchambre($typchambre) {
        $this->typchambre = $typchambre;
    }

    function setNumtel($numtel) {
        $this->numtel = $numtel;
    }

    function setNbrelit($nbrelit) {
        $this->nbrelit = $nbrelit;
    }

    function setEtatoccupation($etatoccupation) {
        $this->etatoccupation = $etatoccupation;
    }

    function setPrixchambre($prixchambre) {
        $this->prixchambre = $prixchambre;
    }

    function setDatentree($datentree) {
        $this->datentree = $datentree;
    }

    function setDatsortie($datsortie) {
        $this->datsortie = $datsortie;
    }
//fin des setteurs
    
    //la fonction hydrate
    
    public function hydrate(array $donnee = NULL){
        if(isset($donnee['idchambre'])){
            $this->idchambre = ($donnee['idchambre']);
        }
        if(isset($donnee['numchambre'])){
            $this->numchambre = ($donnee['numchambre']);
        }
        if(isset($donnee['typchambre'])){
            $this->typchambre = ($donnee['typchambre']);
        }
        if(isset($donnee['numtel'])){
            $this->numtel = ($donnee['numtel']);
        }
        if(isset($donnee['nbrelit'])){
            $this->nbrelit = ($donnee['nbrelit']);
        }
        if(isset($donnee['etatoccupation'])){
            $this->etatoccupation = ($donnee['etatoccupation']);
        }
        if(isset($donnee['prixchambre'])){
            $this->prixchambre = ($donnee['prixchambre']);
        }
        if(isset($donnee['datentree'])){
            $this->datentree = ($donnee['datentree']);
        }if(isset($donnee['datsortie'])){
            $this->datsortie = ($donnee['datsortie']);
        }
    }

}