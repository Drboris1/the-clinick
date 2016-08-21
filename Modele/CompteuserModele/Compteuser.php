<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Compteuser{
    private $idcompte;
    private $idpersonnel;
    private $login;
    private $password;
    private $avatar;
    private $etatcompte;
    private $role;
    
    // le constructeur
    function __construct($donnee = null) {
        $this->hydrate($donnee);
    }

    //les getteurs
    
    function getIdcompte() {
        return $this->idcompte;
    }

    function getIdpersonnel() {
        return $this->idpersonnel;
    }

    function getLogin() {
        return $this->login;
    }

    function getPassword() {
        return $this->password;
    }

    function getAvatar() {
        return $this->avatar;
    }

    function getEtatcompte() {
        return $this->etatcompte;
    }

    function getRole() {
        return $this->role;
    }
    
    //les setteurs

    function setIdpersonnel($idpersonnel) {
        $this->idpersonnel = $idpersonnel;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setAvatar($avatar) {
        $this->avatar = $avatar;
    }

    function setEtatcompte($etatcompte) {
        $this->etatcompte = $etatcompte;
    }

    function setRole($role) {
        $this->role = $role;
    }
    
    //la fonction hydrate
    
 public function hydrate($donnee){
        if(isset($donnee['idcompte'])){
            $this->idcompte = ($donnee['idcompte']);
        }
        if(isset($donnee['idpersonnel'])){
            $this->idpersonnel = ($donnee['idpersonnel']);
        }if(isset($donnee['login'])){
            $this->login = ($donnee['login']);
        }if(isset($donnee['password'])){
            $this->password = ($donnee['password']);
        }
        if(isset($donnee['avatar'])){
            $this->avatar = ($donnee['avatar']);
        }if(isset($donnee['etatcompte'])){
            $this->etatcompte = ($donnee['etatcompte']);
        }if(isset($donnee['role'])){
            $this->role = ($donnee['role']);
        }
   }

}