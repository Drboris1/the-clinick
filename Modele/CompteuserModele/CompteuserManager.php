<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'Compteuser.php';
include_once 'Modele/Modele.php';
//include_once 'Modele/PersonnelModele/PesonnelManager.php';

class CompteuserManager extends Modele{
    
    private $compte;
    
    public function __construct() {
        $this->compte = new Compteuser();
    }
    //le getteur
    function getCompteuser(){
        return $this->compte;
    }
    //le setteur
    function setCompteuser($compte){
        $this->compte = $compte;
    }
    //la fonction d'ajoutd'un compte
    function  addCompteuser(Compteuser $compte){
        try {
            $sql = "INSERT INTO compte_user(id_personnel, login, pass, avatar, etat_compte, role) VALUES "
                    . "(:idpersonnel, :login, :password, :avatar, :etatcompte, :role)";
            
            $parametre = array(
              'id_personnel' =>$compte->getIdpersonnel(),
              'login' =>$compte->getLogin(),
              'pass' =>$compte->getPassword(),
              'avatar' =>$compte->getAvatar(),
              'etat_compte' =>$compte->getEtatcompte(),
              'role' =>$compte->getRole()
            );
            
            $resultat =  $this->executeRequete($sql, $parametre);
            
            return $resultat;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
    
    function authentification($loggnin,$pass){
        $sql = "select * from compte_user where login = :l and pass = sha1(:p)";
        $arg = array(
            'l'=>$loggnin,
            'p'=>$pass
        );
        
        $res = $this->executeRequete($sql, $arg);
        if($data = $res->fetch()):
            $info = array(
                'idpersonnel'=>$data['id_personnel'],
                'login'=>$data['login'],
                'avatar'=>$data['avatar'],
                'role'=>$data['role'],
                'idcompte'=>$data['id_compte']
            );
            $compte_user = new Compteuser($info);
            return $compte_user;
        endif;
        return false;
    }
}
