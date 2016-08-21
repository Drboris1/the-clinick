<?php

include_once 'Modele/Modele.php';
include_once 'Modele/LitModele/Lit.php';





class LitManager extends Modele {
    //put your code here
    private $lelit;
    
    //le constructeur
    public function __construct() {
        $this->lelit = new Lit();
        
    }
    
    //fonction de recuperation des getteurs du modele
    function  getLit(){
        return $this->lelit;
    }
    
    //fonction de recuperation des setteurs
    
    function setLit($lelit){
        $this->lelit = $lelit;
    }
    
    //methode d'ajout d'un lit
    function addlit(Lit $lelit){
        try {
            $sql = "INSERT INTO lits(id_chambre, caracteristique_lit) VALUES "
                    . "(:idchambre, :caracteristiquelit)";
            $paramlit = array(
              ':idchambre' =>$lelit->getIdchambre(),
                'caracteristiquelit' =>$lelit->getCaracteristiquelit()
            );
            $resultlit = $this->executeRequete($sql, $paramlit);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
}
