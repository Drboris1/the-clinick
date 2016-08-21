<?php
include_once './Modele/Modele.php';
include_once 'Chambrehospi.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ChambrehospiManager
 *
 * @author B.N.D
 */
class ChambrehospiManager extends Modele {
    //put your code here
    
    private $chambre;
    
    // LE CONSTRUCTEUR DU MANAGER
    public function __construct() {
        $this->chambre = new Chambrehospi();
    }
    //fonction de recuperation des getteurs du modele
    function getChambrehospi(){
        return $this->chambre;
    }
    
    //fonction de recuperation des setteurs
    function setChambrehospi($chambre){
        $this->chambre = $chambre;
    }
    
    // metthode  d'ajout d'une chambre
    function addChambrehospi(Chambrehospi $chambre){
        try {
            $sql = "INSERT INTO chambre_hospitalisation( numero_chambre, type_chambre, num_tel, nbre_lit, etat_occupation, prix_chambre, date_entre, date_sortie) VALUES "
                    . "(:numchambre, :typchambre, :numtel, :nbrelit, :etatoccupation, :prixchambre, :dateentree , :datesortie)";
            
            $params =array(
                ':numchambre' => $chambre->getNumchambre(),
                ':typchambre' => $chambre->getTypchambre(),
                ':numtel' => $chambre->getNumtel(),
                ':nbrelit' =>$chambre->getNbrelit(),
                ':etatoccupation' =>$chambre->getEtatoccupation(),
                ':prixchambre' => $chambre->getPrixchambre(),
                ':dateentree' => $chambre->getDatentree(),
                ':datesortie' => $chambre->getDatsortie()
            );
            $resultat = $this->executeRequete($sql, $params);
            
           // return $resultat;
        } catch (Exception $ex) {
             echo $ex->getMessage();
        }
    }
        
        function listerchambre(){
            //le code sql pour lister les chambres
            
            try {
                $sql = "SELECT * FROM chambre_hospitalisation ORDER BY id_chambre DESC";
                
//                $resultat = $this->executeRequete($sql)->fetchAll();
                $result = $this->executeRequete($sql)->fetchAll();
            
//                var_dump($resultat);
//                die();
                return $result;
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
        }
    
        function getChambreById($id_chambre){
        
        try {
            //fonction qui recupère une chambre et son id
            $sql = "SELECT * FROM chambre_hospitalisation WHERE id_chambre=:id";
            
            $param = array(
                ':id'=> $id_chambre
            );
            
            $resultat = $this->executeRequete($sql,$param)->fetch();
            $chambrelit = new Chambrehospi(array(
                'idchambre'=> $id_chambre,
                'numchambre'=> $resultat['numero_chambre']
            ));
            return $chambrelit;

        } catch (Exception $ex) {
            
            die($ex->getMessage());
        }
    }
    //Cette methode retourne la liste des service associe a leur id dans un tableau ce qui sera 
     //utilisee pour la liste la ou ce sera neccessaire
    function getChambreListId(){
        try {
            $sql = 'select id_chambre, numero_chambre from chambre_hospitalisation order by id_chambre desc';
            $resilt = $this->executeRequete($sql)->fetchAll();
            return $resilt;
            //var_dump($resilt);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
}
