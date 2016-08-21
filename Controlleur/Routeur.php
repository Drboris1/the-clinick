<?php
require_once 'Requete.php';


class Routeur {
    public function routerUrl(){
        try{
            $requete = new Requete(array_merge($_POST,$_GET));

            $controlleur = $this->getControlleur($requete);
            $method = $this->getMethode($requete);
            
            $controlleur->executerAction($method);
            
        }catch(Exception $ex){   
            $this->gererErreur($ex->getMessage());
        }
    }
    public function getControlleur(Requete $requete){
        $controlleur_nom = "Auth";
        if($requete->existeParametre('c')) {
            $controlleur_nom = $requete->getParametre('c');
            // Première lettre en majuscule
            $controlleur_nom = ucfirst(strtolower($controlleur_nom));
        }
        
        $class_controlleur = "Controlleur".$controlleur_nom;
        $path_controlllerur = "Controlleur/".$class_controlleur.".php";
        
        if(file_exists($path_controlllerur)){
            //si sa existe on le charge
            require_once $path_controlllerur;
            //on cree l'objet du controlleur
            $controlleur = new $class_controlleur();
            $controlleur->setRequete($requete); 
            return $controlleur;
        }else{
            throw new Exception("Fichier '$path_controlllerur' introuvable");
        }
        
    }
    
    public function getMethode(Requete $requete){
        $action = "index";  // Action par défaut
        if($requete->existeParametre('m')) {
            $action = $requete->getParametre('m');
        }
        return $action;
    }
    
    public function gererErreur($txt){
        echo $txt;
    }
}
