<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Plagehoraire{
    
    private $idplagehoraire;
    private $jour;
    private $mois;
    private $annee;
    private $commentaire;
    
    //le constructeur
    public function __construct(array $donnee) {
        $this->hydrate($donnee);
    }
    
    //les getteurs
    function getIdplagehoraire() {
        return $this->idplagehoraire;
    }

    function getJour() {
        return $this->jour;
    }

    function getMois() {
        return $this->mois;
    }

    function getAnnee() {
        return $this->annee;
    }

    function getCommentaire() {
        return $this->commentaire;
    }
//les setteurs
   
    function setJour($jour) {
        $this->jour = $jour;
    }

    function setMois($mois) {
        $this->mois = $mois;
    }

    function setAnnee($annee) {
        $this->annee = $annee;
    }

    function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
    }

//la fonction hydrate
    public function hydrate(array $donnee){
        if(isset($donnee['idplagehoraire'])){
            $this->idplagehoraire = ($donnee['idplagehoraire']);
        }
        if(isset($donnee['jour'])){
            $this->jour = ($donnee['jour']);
        }
        if(isset($donnee['mois'])){
            $this->mois = ($donnee['mois']);
        }
        if(isset($donnee['annee'])){
            $this->annee = ($donnee['annee']);
        }if(isset($donnee['commentaire'])){
            $this->commentaire = ($donnee['commentaire']);
        }
    }
}