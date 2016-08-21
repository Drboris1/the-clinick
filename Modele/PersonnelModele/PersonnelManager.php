<?php
include_once 'personnel.php';
include_once './Modele/Modele.php';
include_once './Modele/PersonnelserviceModele/PersonnelserviceManager.php';

/**
 * Description of PersonnelManager
 *
 * @author B.N.D
 */
class PersonnelManager extends Modele {
    
    private $personnel;
    
    public function __construct() {
        $this->personnel = new personnel();
    }
    
    function getPersonnel() {
        return $this->personnel;
    }

    function setPersonnel($personnel) {
        $this->personnel = $personnel;
    }

    function addPersonnel(personnel $personnel){
        //(1ere requete)le code sql pour l'ajout
        try {
            $sql = "INSERT INTO personnel ( nom_perso, prenom_perso, tel_perso, matricule_perso, age_perso, sexe_perso, dat_prise_service, email_perso, type_perso, specialite) VALUES "
                . "( :nomperso, :prenomperso, :telperso, :matriculeperso, :ageperso, :sexeperso, :datepriseservice, :emailperso, :typeperso, :specialite)";
        
        $parametres = array(
            ':nomperso' => $personnel->getNomperso(),
            ':prenomperso'=>$personnel->getPrenomperso(),
            ':telperso'=>$personnel->getTelperso(),
            ':matriculeperso'=>$personnel->getMatriculeperso(),
            ':ageperso'=>$personnel->getAgeperso(),
            ':sexeperso'=>$personnel->getSexeperso(),
            ':datepriseservice'=>$personnel->getDatepriseservice(),
            ':emailperso'=>$personnel->getEmailperso(),
            ':typeperso'=>$personnel->getTypeperso(),
            ':specialite'=>$personnel->getSpecialite()
        );
       // echo 'ici';
        
        $resultat = $this->executeRequete($sql, $parametres);
        // (2e requete)requete pour la selection du dernier id avec last_insert_id()
        
            $sql1= "SELECT LAST_INSERT_ID() as id FROM personnel ";
            $result =  $this->executeRequete($sql1)->fetch();
        
        //(3e requete)et tu fais une insertion dans personnel service
        $ajoutpersoservice = new PersonnelserviceManager();
        $ajt = $ajoutpersoservice->addpersoservice($result['id'],$personnel->getIdservice() );
       
        return $resultat;
       
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
        
                
        
    }
    
    function listerPersonnel(){
        //le code qui permet de lister le personnel
        try{
            $sql = "SELECT * FROM personnel ORDER BY id_personnel DESC";
           
            $resultat = $this->executeRequete($sql)->fetchAll();
            return $resultat;
        }catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
    
    //fonction de recuperation du ID du personnel
    
    function getPersonnelById($id_personnel){
        
        try {
            //fonction qui recupère un service et son id
            $sql = "SELECT * FROM personnel WHERE id_personnel=:id";
            
            $param = array(
                ':id'=> $id_personnel
            );
            
            $resultat = $this->executeRequete($sql,$param)->fetch();
            $service = new Personnel(array(
                'idpersonnel'=> $id_personnel,
                'nomperso'=> $resultat['nom_perso'],
                'prenomperso'=> $resultat['prenom_perso'],
                'telperso'=> $resultat['tel_perso'],
                'matriculeperso'=> $resultat['matricule_perso'],
                'ageperso'=> $resultat['age_perso'],
                'sexeperso'=> $resultat['sexe_perso'],
                'datepriseservice'=> $resultat['dat_prise_service'],
                'emailperso'=> $resultat['email_perso'],
                'typeperso'=> $resultat['type_perso'],
                'specialite'=> $resultat['specialite']
               
            ));
            return $service;

        } catch (Exception $ex) {
            
            die($ex->getMessage());
        }
    }
}
