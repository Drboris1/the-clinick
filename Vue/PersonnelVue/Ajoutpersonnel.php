<?php
ob_start();
?>

<form action="?c=Personnel&amp;m=savepersonnel" method="POST">
    <div class="col-lg-12">
        <i><h3><span class="glyphicon glyphicon-plus"></span>Nouveau personnel</h3></i>
        <hr>
        <div class="row">
            <div class="col-lg-2"><label>Nom:</label></div>
            <div class="col-lg-4"><input type="text" value="" name="nom_personnel" class="form-control" required placeholder="nom personnel"></div>
            <div class="col-lg-2"><label>Prenom:</label></div>
            <div class="col-lg-4"><input type="text" value="" name="prenom_personnel" class="form-control" required  placeholder="prenom personnel"></div>
        </div>
        </br>
         <div class="row">
            <div class="col-lg-2"><label>Telephonne:</label></div>
            <div class="col-lg-4"><input type="tel" value="" name="telephone" class="form-control"  required placeholder="telephone personnel"></div>
            <div class="col-lg-2"><label>Matricule:</label></div>
            <div class="col-lg-4"><input type="text" value="" name="matricule" class="form-control" required placeholder="matricule personnel"></div>
        </div>
        </br>
        <div class="row">
            <div class="col-lg-2"><label>Age:</label></div>
            <div class="col-lg-4"><input type="number" value="" name="age" class="form-control" required placeholder="age personnel"></div>
            <div class="col-lg-2"><label>Sexe:</label></div>
            <div class="col-lg-4"><input type="text" value="" name="sexe" class="form-control"  required placeholder="sexe personnel"></div>
        </div>
        </br>
        <div class="row">
            <div class="col-lg-2"><label>Email:</label></div>
            <div class="col-lg-4"><input type="email" value="" name="email" class="form-control" required placeholder="Email personnel"></div>
            <div class="col-lg-2"><label>Rôle:</label></div>
            <div class="col-lg-4"><input type="text" value="" name="role" class="form-control" required placeholder="role personnel"></div>
        </div>
        </br>
        <div class="row">
            <div class="col-lg-2"><label>Spécialité:</label></div>
            <div class="col-lg-4"><input type="text" value="" name="specialite" class="form-control" required placeholder="spécialité du personnel"></div>
            <div class="col-lg-2"><label>date de prise de service:</label></div>
            <div class="col-lg-4"><input type="date" value="" name="date" class="form-control" required placeholder="date de prise de service"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-2"><label>affecté au service de:</label></div> 
            <div class="col-lg-10"> 
                <select class="col-lg-12 form-control" name="affectservice"><!-- la boucle php commence ici -->
                    <?php foreach ($afficheservice as $tab){ ?>
                    <option value="<?php echo $tab['id_service']; ?>"><?php echo $tab['nom_service']; ?></option>
                    <?php } ?>
                </select>
            </div>
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