<?php
include_once 'Controlleur.php';
include_once 'Modele/PersonnelModele/PersonnelManager.php';
include_once 'Modele/PersonnelModele/Personnel.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlleurPersonnel
 *
 * @author B.N.D
 */
class ControlleurPersonnel extends Controleur {
     private $personnel;
    //put your code here
    
    function index(){
        session_start();
        require_once './Vue/garde.php';
    }
    
    function __construct() {
        $this->personnel = new PersonnelManager();
        //$this->servicee = new ServiceManager();
    }
    
    // debut les methodes concernant le personnel
    function listerpersonnel(){
        session_start();
        $listepersonnel = $this->personnel->listerPersonnel();
        require_once './Vue/PersonnelVue/Listepersonnel.php';
    }
    
    function addPersonnel(){
        session_start();
        //$service_manager = new ServiceManager();
        //pour se simplifier la vie
        $service_manager = $this->loadManager('service');//on ne fait plus ce qui est en haut ci; donc le new...
        $afficheservice = $service_manager->getServiceListId();
        require_once './Vue/PersonnelVue/Ajoutpersonnel.php';
    }
    //fonction d'enregistrement d'un personnel
    
    function savepersonnel(){
        session_start();
        //le code pour enregistrer le personnel
        
        $nomperso = $_POST['nom_personnel'];
        $prenomperso = $_POST['prenom_personnel'];
        $telperso = $_POST['telephone'];
        $matriculeperso = $_POST['matricule'];
        $ageperso = $_POST['age'];
        $sexeperso = $_POST['sexe'];
        $emailperso = $_POST['email'];
        $roleperso = $_POST['role'];
        $specialiteperso = $_POST['specialite'];
        $datepriseperso = $_POST['date'];
        
        $perso = new Personnel();//creation d'un nouvel objet
        $perso->setNomperso($nomperso);
        $perso->setPrenomperso($prenomperso);
        $perso->setTelperso($telperso);
        $perso->setMatriculeperso($matriculeperso);
        $perso->setAgeperso($ageperso);
        $perso->setSexeperso($sexeperso);
        $perso->setEmailperso($emailperso);
        $perso->setTypeperso($roleperso);
        $perso->setSpecialite($specialiteperso);
        $perso->setDatepriseservice($datepriseperso);
        $perso->setIdservice($_POST['affectservice']);
        
        //instance d'un nouvel objet du manager
       $savedperso = new PersonnelManager();
        $rep = $savedperso->addPersonnel($perso);
        //echo 'boris';
        if($rep == FALSE){
            $this->redirection('personnel', 'addPersonnel');  
        }
        
        $this->redirection('personnel', 'listerpersonnel');
    }
    
    //fonction de modification d'un personnel
    function editerPersonnel(){
        
        session_start();
     
        $manager =  $this->loadManager('Personnel');
        //$manager =new ServiceManager();
        $personnel = $manager->getPersonnelById($_GET['id']);
        
        if ($personnel == FALSE){
            $this->redirection('personnel', 'listerpersonnel&e=erreur enregistrement');
            return;
        }else {
            require_once './Vue/PersonnelVue/Editerpersonnel.php';
         }   
    }
    
    //fin des methodes du personnel
}
