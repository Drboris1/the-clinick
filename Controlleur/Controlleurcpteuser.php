<?php

include_once 'Controlleur.php';
include_once 'Modele/CompteuserModele/CompteuserManager.php';
include_once 'Modele/CompteuserModele/Compteuser.php';



class Controlleurcpteuser extends Controleur {
    //put your code here
    private $moncompte;
            
     function index(){
        session_start();
        require_once './Vue/garde.php';
        
    }
    
     //traitement des données venant du formulaire
    function AjouterCompte(){
        session_start();
        require_once 'Vue/CompteUserVue/Ajoutcpteuser.php';
    }
    
    //fonction d'enregistrement d'un compte user
    
    function  savemycompte(){
        session_start();
        //le code pour enregistrer le service
        
        $moncompte = new CompteUser();
        $this->loadManager('Compteuser');
       //$moncompte->setIdpersonnel($_POST['nom_personnel']);
       $moncompte->setIdpersonnel($idpersonnel);
       $moncompte->setLogin($_POST['login_compte']);
       $moncompte->setPassword($_POST['pass_compte']);
       $moncompte->setAvatar($_POST['avatar_compte']);
       $moncompte->setEtatcompte($_POST['etat_compte']);
       $moncompte->setRole($_POST['role_compte']);
       
        $savedmycpte = new CompteUserManager();
        $rep = $savedmycpte->AjouterCompte($moncompte);
        
        if($rep == FALSE){
            echo 'valeur null';  
        }
        $_SESSION['idpersonnel'] = $rep->getIdpersonnel;
        $_SESSION['login'] = $rep->getLogin;
        $_SESSION['password'] = $rep->getPassword;
        $_SESSION['avatar'] = $rep->getAvatar;
        $_SESSION['etatcompte'] = $rep->getEtatcompte;
        $_SESSION['role'] = $rep->getRole;
        echo 'Ajout service avec succes';
        $this->redirection('cpteuser', 'Ajoutcpteuser');
    }
}
