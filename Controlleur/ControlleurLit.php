<?php
include_once 'Controlleur.php';
include_once 'Modele/LitModele/Lit.php';
include_once 'Modele/LitModele/LitManager.php';





class ControlleurLit extends Controleur {
    //put your code here
    private $monlit;
            
     function index(){
        session_start();
        require_once './Vue/garde.php';
    }
    
    //le constructeur qui appel le manager
    
    function __construct() {
        $this->monlit = new LitManager();
    }
    
    //debut des methodes concernant le lit
    
    function addlit(){
        session_start();
        $litmanager = $this->loadManager('lit');
        //$affichechambre = $litmanager->getChambreListId();
        
        require_once './Vue/LitsVue/Ajouterlit.php';
    }
    
    function  savelit(){
        session_start();
        //code d'enregistrement d'un lit
        $savlit = new Lit();
        $savlit->setIdchambre($_POST['affectchambre']);
        $savlit->setCaracteristiquelit($_POST['caracteristique']);
        
        $savedlit = new LitManager();
        $rep = $savedlit->addlit($savlit);
        
        if ($rep == FALSE){
            $this->redirection('Lit', 'addlit');
        }
        
        $this->redirection('Lit', 'addlit');
    }
    
}
