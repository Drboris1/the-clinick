<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Fichemedicale{
    private $idfichem;
    private $idmedical;
    private $datedebutsoins;
    private $descriptionsoins;
    private $datefinsoins;
    private $diagnosticfinal;
    private $etatdesante;
    private $observation;
    
    //le constructeur;
    public function __construct() {
        $this->hydrate($donnee);
    }
    
    //les getteurs
    function getIdfichem() {
        return $this->idfichem;
    }
    function getIdmedical() {
        return $this->idmedical;
    }

    function getNumfichem() {
        return $this->numfichem;
    }

    function getDatedebutsoins() {
        return $this->datedebutsoins;
    }

    function getDescriptionsoins() {
        return $this->descriptionsoins;
    }

    function getDatefinsoins() {
        return $this->datefinsoins;
    }

    function getDiagnosticfinal() {
        return $this->diagnosticfinal;
    }

    function getEtatdesante() {
        return $this->etatdesante;
    }

    function getObservation() {
        return $this->observation;
    }
//les setteurs
   
    function setIdmedical($idmedical) {
        $this->idmedical = $idmedical;
    }

    function setDatedebutsoins($datedebutsoins) {
        $this->datedebutsoins = $datedebutsoins;
    }

    function setDescriptionsoins($descriptionsoins) {
        $this->descriptionsoins = $descriptionsoins;
    }

    function setDatefinsoins($datefinsoins) {
        $this->datefinsoins = $datefinsoins;
    }

    function setDiagnosticfinal($diagnosticfinal) {
        $this->diagnosticfinal = $diagnosticfinal;
    }

    function setEtatdesante($etatdesante) {
        $this->etatdesante = $etatdesante;
    }

    function setObservation($observation) {
        $this->observation = $observation;
    }

//la fonction hydrate
    
    public function hydrate(array $donnee){
        if(isset($donnee['idfichem'])){
            $this->idfichem = ($donnee['idfichem']);
        }
        if(isset($donnee['idmedical'])){
            $this->idmedical = ($donnee['idmedical']);
        }
        if(isset($donnee['datedebutsoins'])){
            $this->datedebutsoins = ($donnee['datedebutsoins']);
        }
        if(isset($donnee['descriptionsoins'])){
            $this->descriptionsoins = ($donnee['descriptionsoins']);
        }
        if(isset($donnee['datefinsoins'])){
            $this->datefinsoins = ($donnee['datefinsoins']);
        }
        if(isset($donnee['diagnosticfinal'])){
            $this->diagnosticfinal = ($donnee['diagnosticfinal']);
        }
        if(isset($donnee['etatdesante'])){
            $this->etatdesante = ($donnee['etatdesante']);
        }
        if(isset($donnee['observation'])){
            $this->observation = ($donnee['observation']);
        }
        
    }
}