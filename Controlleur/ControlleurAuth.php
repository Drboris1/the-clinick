<?php

include_once 'Controlleur.php';
include_once 'Modele/CompteuserModele/CompteuserManager.php';

class ControlleurAuth extends Controleur {
    //put your code here
    public function index() {
       if(isset($_GET['err'])){
           echo '<script>alert('.$_GET['err'].');</script>';
       }
       require_once './Vue/auth.php';
    }
    
    public function authentific(){
        $loggin = $_POST['login'];
        $pass = $_POST['pass'];
        $userManager = new CompteuserManager();
        $res = $userManager->authentification($loggin, $pass);
        if($res == false){
            header('location:http://localhost/clinik/?err="echec authentification"');
            return;
        }
        
        session_start();
        $_SESSION['login'] = $res->getLogin();
        $_SESSION['avatar'] = $res->getAvatar();
        $_SESSION['role'] = $res->getRole(); 
        $_SESSION['idpersonnel'] = $res->getIdpersonnel();
        $_SESSION['idcompte'] = $res->getIdcompte();
        $_SESSION['loged'] = true;
        //.$_SESSION['role']
        header('location:http://'.$_SERVER['SERVER_NAME'].'/clinik/?c='.$_SESSION['role']);
    }
}
