<?php
include_once 'Controlleur.php';
include_once 'Modele/ChambrehospiModele/ChambrehospiManager.php';
include_once 'Modele/ChambrehospiModele/Chambrehospi.php';

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
class ControlleurChambre extends Controleur {
    //put your code here
     private  $chambree;
    
    
    //la fonction index est le point d'entree, il faut toujours l'inclure
    function index(){
        session_start();
        require_once './Vue/garde.php';
    }
    
    //DEBUT DU TRAITEMENT DU LES CHAMBRES
    
    function addChambrehospi(){
        session_start();
         $chambree = $this->loadManager('Chambrehospi');//on ne fait plus ce qui est en haut ci; donc le new...
        require_once './Vue/ChambreVue/Ajouterchambre.php';
    }
    
    function savechambre(){
        session_start();
       
        //le code pour enregistrer le personnel
       
        $chamba = new Chambrehospi();//creation d'un nouvel objet
        $chamba->setNumchambre($_POST['numchambre']);
        $chamba->setTypchambre($_POST['typchambre']);
        $chamba->setNumtel($_POST['telephone']);
        $chamba->setNbrelit($_POST['nbrelit']);
        $chamba->setEtatoccupation($_POST['etatoccupe']);
        $chamba->setPrixchambre($_POST['prix']);
        $chamba->setDatentree($_POST['entre']);
        $chamba->setDatsortie($_POST['sortie']);
        
        //var_dump($chamba);
        //die();
        //instance d'un nouvel objet du manager
        $savedchambre =  $this->loadManager('Chambrehospi');
        //var_dump($savedchambre);
      
       //$savedchambre = new ChambrehospiManager();
        $rep = $savedchambre->addChambrehospi($chamba);
        
        if($rep == FALSE){
            
            $this->redirection('Chambre', 'addChambrehospi&err=erreur'); 
            
        }
        $this->redirection('Chambre', 'addChambrehospi');
    }
    
    function __construct() {
        $this->chambree = new ChambrehospiManager();
    }
    
    
    //fonction pour lister les chambres
    function listerchambre(){
        session_start();
        
        //creation de l'objet chambre manager
        $listechambre = $this->loadManager('chambrehospi');
        //appel de la methode a partir d l'objet cree
        $liste = $listechambre->listerchambre();
      
        require_once './Vue/ChambreVue/Listerchambre.php';
        //$listepersonnel = $this->personnel->listerPersonnel();
    }
}
