    <?php 
    ob_start();
    ?>

 <form action="?c=Administrateur&amp;m=updateService" method="POST">
        <fieldset class="space_data"> <legend>informations sur un service </legend>
            <table id="tab_new_etud">
                <tr>
                    <td><label>N°:</label></td> <td><input type="text" name="idservice" class="form-control"  readonly="readonly" value="<?php echo $service->getIdService(); ?>"/></td>
                </tr>
                <tr>
                    <td><label>Nom service:</label></td><td><input type="text" name="nomservice" class="form-control" value="<?php echo $service->getNomService(); ?>" required /></td>
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
    $contenu= ob_get_clean();
    require_once './Vue/gabarit.php';
    ?>

