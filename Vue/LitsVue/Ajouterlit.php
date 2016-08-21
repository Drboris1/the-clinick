<?php
ob_start();
?>

<form action="?c=Lit&amp;m=savelit" method="POST">
    <div class="col-lg-12">
        <i><h3><span class="glyphicon glyphicon-plus"></span>Nouveau lit</h3></i>
        <hr>
        <div class="row">
            <div class="col-lg-2"><label>Chambre N°:</label></div> 
            <div class="col-lg-10"> 
                <select class="col-lg-12 form-control" name="affectchambre"><!-- la boucle php commence ici -->
                    <?php foreach ($affichechambre as $tab){ ?>
                    <option value="<?php echo $tab['id_chambre']; ?>"><?php echo $tab['numero_chambre']; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        </br>
        <div class="row">
            <div class="col-lg-2"><label>Caracteristiques:</label></div>
            <div class="col-lg-4"><input type="text" value="" name="caracteristique" class="form-control" required placeholder="caracteristique du lit"></div>
            
        </div>
        <br>
        
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