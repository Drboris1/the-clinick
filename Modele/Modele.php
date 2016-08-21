<?php
/**
 * Description of Modele
 *
 * @author B.N.D
 */
abstract class Modele {
    //Objet PDO d'acces à la bd
    private $bdd;
    
    //on execute une requete sql eventuelement parametré
    protected function executeRequete($sql, $params = NULL){
        if ($params == NULL){
            $resultat = $this->getBdd()->query($sql);//on execute directement
            
        }
        else {
            $resultat = $this->getBdd()->prepare($sql);//on fait la requete preparé
            $resultat->execute($params);
         }
         return $resultat;
    }
    
    //cette fonction renvoie une objet de connexion à la BD en initialisat la connexion au besoin
    private function getBdd(){
        if ($this->bdd == NULL){
            //creation de la connexion à la bd
            $this->bdd = new PDO('mysql:host=localhost;dbname=clinik;charset=utf8',
                'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        }
        return $this->bdd;
    }
}
