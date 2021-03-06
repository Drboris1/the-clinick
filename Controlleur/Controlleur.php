<?php

require_once 'Requete.php';
//require_once 'Vue.php';

abstract class Controleur {
// Action à réaliser
    private $action;
    // Requête entrante
    protected $requete;
    // Définit la requête entrante
    public function setRequete(Requete $requete) {
        $this->requete = $requete;
    }
    // Exécute l'action à réaliser
    public function executerAction($action) {
        
        if(method_exists($this, $action)) {
            $this->action = $action;
            $this->{$this->action}();
        }else {
            $classeControleur = get_class($this);
            throw new Exception("Action '$action' non définie dans la classe $classeControleur");
        }
    }
    
    function redirection($controlleur,$method = NULL){
       $addres = '';
        if(!is_null($method)){
            $addres = '&m='.$method;
        }
        $addres = $controlleur.$addres;
        header('location:http://'.$_SERVER['SERVER_NAME'].'/clinik/?c='.$addres);
    }
    
    // Méthode abstraite correspondant à l'action par défaut
    // Oblige les classes dérivées à implémenter cette action par défaut
    
    public abstract function index();
    
    // Génère la vue associée au contrôleur courant
    //protected function genererVue($donneesVue = array()) {
    //    // Détermination du nom du fichier vue à partir du nom du contrôleur actuel
    //    $classeControleur = get_class($this);
    //    $controleur = str_replace("Controleur", "", $classeControleur);
    //    // Instanciation et génération de la vue
    //    $vue = newVue($this->action, $controleur);
    //    $vue->generer($donneesVue);
    //}
    
    
    // cette fonction permet de charger automatiquement les managers dans les fonctions du controlleur controlleurs 
    public function loadManager($managerName){
        $manager = ucfirst(strtolower($managerName));
        $this->manager = './Modele/'.$manager.'Modele/'.$manager.'Manager.php';
        if(!file_exists($this->manager)){
            echo 'le manager demandé nexiste pas';
            die();
        }
        require_once $this->manager;
        $manager_class = $manager.'Manager';
        return new $manager_class();
    }
}