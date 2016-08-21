<?php
ob_start();
?>

<form action="?c=Chambre&amp;m=savechambre" method="POST">
    <div class="col-lg-12">
        <i><h3><span class="glyphicon glyphicon-plus"></span>Nouvelle chambre</h3></i>
        <hr>
        <div class="row">
            <div class="col-lg-2"><label>Chambre N°:</label></div>
            <div class="col-lg-4"><input type="text" value="" name="numchambre" class="form-control" required placeholder="numero de chambre"></div>
            <div class="col-lg-2"><label>type de chambre:</label></div>
            <div class="col-lg-4"><input type="text" value="" name="typchambre" class="form-control" required  placeholder="haut /mini standing"></div>
        </div>
        </br>
         <div class="row">
            <div class="col-lg-2"><label>Telephone:</label></div>
            <div class="col-lg-4"><input type="tel" value="" name="telephone" class="form-control"  required placeholder="+243 telephone de chambre"></div>
            <div class="col-lg-2"><label>Nombre de lits:</label></div>
            <div class="col-lg-4"><input type="number" value="" name="nbrelit" class="form-control" required placeholder="nmobres de lits "></div>
        </div>
        </br>
        <div class="row">
            <div class="col-lg-2"><label>Etat(O/N):</label></div>
            <div class="col-lg-4"><input type="texte" value="" name="etatoccupe" class="form-control" required placeholder="etat d'occupation"></div>
            <div class="col-lg-2"><label>Prix:</label></div>
            <div class="col-lg-4"><input type="number" value="" name="prix" class="form-control"  required placeholder="prix de chambre"></div>
        </div>
        </br>
        <div class="row">
            <div class="col-lg-2"><label>Date d'entree:</label></div>
            <div class="col-lg-4"><input type="date" value="" name="entre" class="form-control" required placeholder="date d'entrée"></div>
            <div class="col-lg-2"><label>Date de sortie:</label></div>
            <div class="col-lg-4"><input type="date" value="" name="sortie" class="form-control" required placeholder="date de sortie"></div>
        </div>
      
        </br>
        <center>
        <input type="submit"  value="ajouter" name="reg" class=" btn btn-success"> &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="reset" name="annuler" class=" btn btn-danger">
        </center>
       </div>
</form>

<?php 
$contenu= ob_get_clean();
require_once './Vue/gabarit.php';
?>
