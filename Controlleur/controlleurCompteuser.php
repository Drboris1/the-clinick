<?php
//include_once 'Controlleur.php';
//include_once 'Modele/CompteuserModele/CompteuserManager.php';
//include_once 'Modele/CompteuserModele/Compteuser.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlleurChambre
 *
 * @author B.N.D
 */
class Controlleurcompteuser extends Controleur {
    //put your code here
     private  $moncompte;
    
    
    //la fonction index est le point d'entree, il faut toujours l'inclure
    function index(){
        session_start();
        require_once './Vue/garde.php';
    }
    
    //DEBUT DU TRAITEMENT DU LES CHAMBRES
    
    function addCpteuser(){
        session_start();
         $moncompte = $this->loadManager('Compteuser'); //on ne fait plus ce qui est en haut ci; donc le new...
        require_once './Vue/CompteUserVue/Ajoutcpteuser.php';
    }
    
    function savecpteuser(){
        session_start();
       
        //le code pour enregistrer le personnel
       
        $cpte = new Compteuser();//creation d'un nouvel objet
        $cpte->setIdpersonnel($_POST['nom_personnel']);
        $cpte->setLogin($_POST['login_compte']);
        $cpte->setPassword($_POST['pass_compte']);
        $cpte->setAvatar($_POST['avatar_compte']);
        $cpte->setEtatcompte($_POST['etat_compte']);
        $cpte->setRole($_POST['role_compte']);
        
        //var_dump($chamba);
        //die();
        //instance d'un nouvel objet du manager
        $savedcpte = $this->loadManager('Compteuser');
        //var_dump($savedchambre);
      
       //$savedchambre = new ChambrehospiManager();
        $rep = $savedcpte->addCpteuser($cpte);
        
        if($rep == FALSE){
            
            $this->redirection('Compteuser', 'addCpteuser&err=erreur'); 
            
        }
        $this->redirection('Compteuser', 'addCpteuser');
    }
    
    function __construct() {
        $this->moncompte = new CompteuserManager();
    }
    
    
//    //fonction pour lister les chambres
//    function listerchambre(){
//        session_start();
//        
//        //creation de l'objet chambre manager
//        $listechambre = $this->loadManager('chambrehospi');
//        //appel de la methode a partir d l'objet cree
//        $liste = $listechambre->listerchambre();
//      
//        require_once './Vue/ChambreVue/Listerchambre.php';
//        //$listepersonnel = $this->personnel->listerPersonnel();
//    }
}
