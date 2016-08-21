<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class chambrefichemedicale{
    
    private $idchambrefiche;
    private $idchambre;
    private $idfichemedical;
    
    //le constructeur
    
    function __construct(array $donnee) {
        $this->hydrate($donnee);
    }

    //les guetteurs
    function getIdchambrefiche() {
        return $this->idchambrefiche;
    }

    function getIdchambre() {
        return $this->idchambre;
    }

    function getIdfichemedical() {
        return $this->idfichemedical;
    }
    
    //les setteurs

    function setIdchambre($idchambre) {
        $this->idchambre = $idchambre;
    }

    function setIdfichemedical($idfichemedical) {
        $this->idfichemedical = $idfichemedical;
    }
    
    //la fonction hydrate
    
    public function hydrate(array $donnee){
        if(isset($donnee['idchambrefiche'])){
            $this->idchambrefiche = ($donnee['idchambrefiche']);
        }if(isset($donnee['idchambre'])){
            $this->idchambre = ($donnee['idchambre']);
        }if(isset($donnee['idfichemedical'])){
            $this->idfichemedical = ($donnee['idfichemedical']);
        }
    }


}