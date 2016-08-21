<?php
include_once 'Controlleur.php';
//include_once 'Modele/PersonnelModele/PersonnelManager.php';

include_once 'Modele/PersonnelserviceModele/PersonnelserviceManager.php';
include_once 'Modele/ServiceModele/Service.php';




class ControlleurAdministrateur extends Controleur{
    
   
    private $servicee;
//    private  $chambree;
    //private $persoservice;




    //la fonction index est le point d'entree, il faut toujours l'inclure
    function index(){
        session_start();
        require_once './Vue/garde.php';
    }
            
    
    //debut des methodes concernant les services
    
    //traitement des données venant du formulaire
    function AjouterService(){
        session_start();
        require_once 'Vue/ServiceVue/Ajouterservice.php';
    }
    function  saveservice(){
        session_start();
        //le code pour enregistrer le service
        $servicee =  $this->loadManager('Service');
        $nomservice = $_POST['nomservicee'];
        $servicee = new Service();
       $servicee->setNomservice($nomservice);
        $savedservice = new ServiceManager($servicee);
        $rep = $savedservice->addService($servicee);
        
        if($rep == FALSE){
            echo 'valeur null';  
        }
        $_SESSION['nomservice'] = $rep->getNomservice;
        echo 'Ajout service avec succes';
        $this->redirection('administrateur', 'AjouterService');
    }
  
    function listerservice(){
        session_start();
        $service = $this->loadManager('service');
        $listerservice = $service->listerService();
        require_once './Vue/ServiceVue/Listerservice.php';
    }
    function editerService(){
        
        session_start();
        
        //pour modifier un service
       // if (isset($_GET['id']) == false){
          //  $this->redirection('administrateur', 'listerservice&e=erreu');
            //return;
        //}
        $manager =  $this->loadManager('Service');
        //$manager =new ServiceManager();
        $service = $manager->getServiceById($_GET['id']);
        
        if ($service == FALSE){
            $this->redirection('administrateur', 'listerservice&e=erreur enregistrement');
            return;
        }else {
            require_once './Vue/ServiceVue/EditerService.php';
         }   
    }
    
    //fonction de traitement de la requete de modification
    
    function updateService(){
        session_start();
        $manage = $this->loadManager('Service');
        //$manage = new ServiceManager();
        $modif = $manage->updateService($_POST['idservice'], $_POST['nomservice']);
        if ($modif == FALSE){
            $this->redirection('administrateur', 'listerservice&e=erreur de modification');
            return;
        }else{
             $this->redirection('administrateur', 'listerservice');
        }
    }
    
    //fonction de suppression d'un service
    function supprimerService(){
        session_start();
        $supprime = $this->loadManager('Service');
        //$supprime = new ServiceManager();
        $delete = $supprime->deleteService($_GET['id']);
        if (delete == FALSE){
            $this->redirection('administrateur', 'listerservice&e=erreur de suppression');
            return;
        }else{
            $this->redirection('administrateur', 'listerservice');
        }
    }




    //fin des methodes concernant les services 
    
    
    
    // ICI LA FONCTION DE LISTING DE DE PERSONNEL SERVICE
    function listervuepersonnelservice(){
        session_start();
        $persoservicemanager = $this->loadManager('Personnelservice');
        $affichage = $persoservicemanager->listerpersonnelservice();
        ///$affichage = $this->persoservice->
        require_once './Vue/Vuepersonnelservice/Affichepersonnelservice.php';
    }
  
    //FIN DE LA FONCTION DE LISTING DE PERSONNEL_SERVICE
    
    
    
}
