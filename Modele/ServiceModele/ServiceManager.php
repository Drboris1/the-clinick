<?php
include_once 'Service.php';
include_once './Modele/Modele.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ServiceManager extends Modele{
 
    private $unservice;
    
    //le constructeur
    public function __construct() {
        $this->unservice = new Service();
    } 
    //le getteur
    function getService(){
        return $this->unservice;
    }
    
    //le setteur
    function setService($unservice){
        $this->unservice = $unservice;
    }
    
    // la fonction d'ajout d'un service
    function addService(Service $unservice){
     
        //ici le code sql pour l'insertion 
        
        try {
            $sql ="INSERT INTO service(nom_service) VALUES (:nomservice)";
       
            $paramservice = array(
                ':nomservice' =>$unservice->getNomservice()
            );
            
            $resultat = $this->executeRequete($sql, $paramservice);
        
            return $resultat;
            
            } catch (Exception $ex) {
            
                echo $ex->getMessage();
        }
    }
    
    function listerService(){
        //le code sql qui permet de lister les services
        try {
            $sql = "SELECT * FROM service ORDER BY id_service DESC";
            $resultat = $this->executeRequete($sql)->fetchAll();
            return $resultat;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            
        }
    }
    //fonction de modification
    
    function editerService(Service $unservice){
        try{
            //le code sql de modification d'une donnée venant de la bd
            $sql = "UPDATE service SET  nom_service =:nomservice where id_service=:id";
            $edition= array(
                ':nomservice' =>$unservice->setNomservice($nomservice),
                'idservice' =>$unservice->getIdservice()       
            );
            $resultat =  $this->executeRequete($sql)->fetchAll();
            return $resultat;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
    
    function getServiceById($id_service){
        
        try {
            //fonction qui recupère un service et son id
            $sql = "SELECT * FROM service WHERE id_service=:id";
            
            $param = array(
                ':id'=> $id_service
            );
            
            $resultat = $this->executeRequete($sql,$param)->fetch();
            $service = new Service(array(
                'idservice'=> $id_service,
                'nomservice'=> $resultat['nom_service']
            ));
            return $service;

        } catch (Exception $ex) {
            
            die($ex->getMessage());
        }
    }
    
    /**
     * Cette methode retourne la liste des service associe a leur id dans un tableau ce qui sera 
     * utilisee pour la liste la ou ce sera neccessaire
     * 
     * @author Boris N
     * 
     * 
     */
    function getServiceListId(){
        try {
            $sql = 'select id_service, nom_service from service order by id_service desc';
            $resilt = $this->executeRequete($sql)->fetchAll();
            return $resilt;
            //var_dump($resilt);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
    
    //fonction de modification
    
    function updateService($id_service, $nom_service){
        try {
        $sql = "UPDATE service SET nom_service=:nomservice WHERE id_service=:id";
       $parametre = array(
           ':id'=> $id_service,
           ':nomservice' =>$nom_service
            );
        $resultat = $this->executeRequete($sql, $parametre);
        return $resultat;
//        var_dump($resultat);
//        die();
        } catch (Exception $ex) {
            echo $ex->getMessage();   
        }
    }


    //fonction de suppression
    function  deleteService($id_service){
        try{
            $sql = "DELETE FROM service WHERE id_service=:id";
            $parametre = array(
              ':id'=>$id_service
                    );
            $resultat = $this->executeRequete($sql, $parametre);
           return $resultat;
//            var_dump($resultat);
//                die();
        } catch (Exception $ex) {
              echo $ex->getMessage();
        }
    }
}