<?php
include_once 'Personnelservice.php';
include_once './Modele/Modele.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class PersonnelserviceManager extends Modele {
    //put your code here
    private  $persoservice;
    
    //son constructeur
    public function __construct() {
        $this->persoservice = new Personnelservice();
}
//le getteur
function getPersonnelservice(){
    return $this->persoservice;
}

// le setteur
function setPersonnelservice($persoservice){
    $this->persoservice = $persoservice;
}

//la fonction d'afout 
function  addpersoservice($id_p,$id_ser){
  
    try {
       
        $sql2 = "INSERT INTO personnel_service(id_personnel, id_service) VALUES "
                . "(:idpersonnel, :idservice)";
        $recuperation = array(
            ':idpersonnel'=>$id_p,
            ':idservice'=>$id_ser
        );
        $resultat = $this->executeRequete($sql2, $recuperation);
        return $resultat;
    } catch (Exception $ex) {
         echo $ex->getMessage();
    }
}

function listerpersonnelservice(){
    try {
        $sql = "SELECT * FROM vue_personnel_service ORDER BY id_personnelservice DESC";
        
        $resultat =  $this->executeRequete($sql)->fetchAll();
        return $resultat;
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
}




    
}
