<?php
ob_start();
?>

<form action="?c=Compteuser&amp;m=savecpteuser" method="POST">
    <div class="col-lg-12">
        <i><h3><span class="glyphicon glyphicon-plus"></span>Nouveau compte d'utilisateur</h3></i>
        <hr>
        <div class="row">
            <div class="col-lg-2"><label>Nom du personnel:</label></div> 
            <div class="col-lg-10"> 
                <select class="col-lg-12 form-control" name="nom_personnel"><!-- la boucle php commence ici -->
                    <?php foreach ($afficheservice as $tab){ ?>
                    <option value="<?php echo $tab['id_service']; ?>"><?php echo $tab['nom_service']; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        </br>
        <div class="row">
            <div class="col-lg-2"><label>Login:</label></div>
            <div class="col-lg-4"><input type="text" value="" name="login_compte" class="form-control" required placeholder="login du personnel"></div>
            <div class="col-lg-2"><label>mot de passe:</label></div>
            <div class="col-lg-4"><input type="password" value="" name="pass_compte" class="form-control" required  placeholder="mot de passe du personnel"></div>
        </div>
        </br>
         <div class="row">
            <div class="col-lg-2"><label>avatar:</label></div>
            <div class="col-lg-4"><input type="image" value="" name="avatar_compte" class="form-control"  required placeholder="image personnel"></div>
            <div class="col-lg-2"><label>etat compte:</label></div>
            <div class="col-lg-4"><input type="text" value="" name="etat_compte" class="form-control" required placeholder="etat du  personnel"></div>
        </div>
        </br>
        <div class="row">
            <div class="col-lg-2"><label>role:</label></div>
            <div class="col-lg-4"><input type="text" value="" name="role_compte" class="form-control" required placeholder="role du personnel"></div>
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