    <?php 
    ob_start();
    ?>

 <form action="?c=personnel&amp;m=updatePersonnel" method="POST">
        <fieldset class="space_data"> <legend>Modifier les informations sur un personnel </legend>
            <table id="tab_new_etud">
                <tr>
                    <td><label>N°:</label></td> <td><input type="number" name="idpersonnel" class="form-control"  readonly="readonly" value="<?php echo $personnel->getIdperso(); ?>"/></td>
                </tr>
                <tr>
                    <td><label>Nom:</label></td><td><input type="text" name="nomperso" class="form-control" value="<?php echo $personnel->getNomperso(); ?>" required /></td>
                </tr>
                <tr>
                    <td><label>Prenom:</label></td><td><input type="text" name="prenomperso" class="form-control" value="<?php echo $personnel->getPrenomperso(); ?>" required /></td>
                </tr>
                <tr>
                    <td><label>Telephone:</label></td><td><input type="number" name="telperso" class="form-control" value="<?php echo $personnel->getTelperso(); ?>" required /></td>
                </tr>
                <tr>
                    <td><label>Matricule:</label></td><td><input type="text" name="matriculeperso" class="form-control" value="<?php echo $personnel->getMatriculeperso(); ?>" required /></td>
                </tr>
                <tr>
                    <td><label>Age:</label></td><td><input type="number" name="ageperso" class="form-control" value="<?php echo $personnel->getAgeperso(); ?>" required /></td>
                </tr>
                <tr>
                    <td><label>Sexe:</label></td><td><input type="text" name="sexeperso" class="form-control" value="<?php echo $personnel->getSexeperso(); ?>" required /></td>
                </tr>
                <tr>
                    <td><label>Email:</label></td><td><input type="email" name="emailperso" class="form-control" value="<?php echo $personnel->getDatepriseservice(); ?>" required /></td>
                </tr>
                <tr>
                    <td><label>Role:</label></td><td><input type="text" name="typeperso" class="form-control" value="<?php echo $personnel->getEmailperso(); ?>" required /></td>
                </tr>
                <tr>
                    <td><label>Spécialité:</label></td><td><input type="text" name="specialite" class="form-control" value="<?php echo $personnel->getTypeperso(); ?>" required /></td>
                </tr>
                <tr>
                    <td><label>date de prise service:</label></td><td><input type="date" name="datepriseservice" class="form-control" value="<?php echo $personnel->getSpecialite(); ?>" required /></td>
                </tr>
                <tr>
                    <td><label>affecté au service de:</label></td><td><input type="text" name="affectation" class="form-control" value="<?php echo $personnel->getNomService(); ?>" required /></td>
                </tr>
               
            </table>
        </fieldset>
        <fieldset class="space_data"> <legend>option</legend>
            <table id="tab_option">
                <tr>
                    <td><input type="submit" name="store_btn" value="modifier" class="btn btn-success"></td>
                    <td><input type="reset" name="reload" value="annuler" class="btn btn-info"</td>
                    <td><a href="#"><input type="button" name="quit" value="Quit" class="btn btn-danger"</a></td>
                </tr>
            </table>
            
        </fieldset>
        
    </form>

    <?php 
    $contenu = ob_get_clean();
    //require_once './Vue/gabarit.php';


