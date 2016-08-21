<?php
ob_start();
?>

<form action="?c=Administrateur&amp;m=saveservice" method="POST">
    <div class="col-lg-12">
        <i><h3><span class="glyphicon glyphicon-plus"></span>Ajouter un nouveau Service</h3></i>
        <hr>
        <div class="row">
            <div class="col-lg-2"><label>Nom du service:</label></div>
            <div class="col-lg-10"><input type="text" value="" name="nomservicee" class="form-control" required placeholder="nom service"></div>
        </div>
        </br></br>
        
        <input type="submit"  value="ajouter" name="reg" class=" btn btn-success"> &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="reset" name="annuler" class=" btn btn-danger">
       
    </div>
</form>


<?php 
$contenu= ob_get_clean();
require_once './Vue/gabarit.php';
?>