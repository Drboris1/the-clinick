<?php 
ob_start();
?>

<div class="from_titre"> <h3><i class="glyphicon glyphicon-list"></i>&nbsp;&nbsp;Liste du personnel par service</h3></div>
<table class="table table-bordered table-condensed table-responsive" id="list_tab">
    <tr id="tab_entet">
        <th style="color: green; font-family: verdana">N°</th>
        <th style="color: green; font-family: verdana">nom</th>
        <th style="color: green; font-family: verdana">prenom</th>
        <th style="color: green; font-family: verdana">tel</th>
        <th style="color: green; font-family: verdana">date prise service</th>
        <th style="color: green; font-family: verdana">email</th>
        <th style="color: green; font-family: verdana">type</th>
        <th style="color: green; font-family: verdana">spécialite</th>
        <th style="color: green; font-family: verdana">Nom service</th>
        
    </tr>
    <?php 
    foreach ($affichage as $persoservice):
        
    ?>
    <tr>
        <td ><?= $persoservice['id_personnelservice']; ?></td>
        <td ><?= $persoservice['nom_perso']; ?></td>
        <td ><?= $persoservice['prenom_perso']; ?></td>
        <td ><?= $persoservice['tel_perso']; ?></td>
        <td ><?= $persoservice['dat_prise_service']; ?></td>
        <td ><?= $persoservice['email_perso']; ?></td>
        <td ><?= $persoservice['type_perso']; ?></td>
        <td ><?= $persoservice['specialite']; ?></td>
        <td ><?= $persoservice['nom_service']; ?></td>
    </tr>
    <?php
    
    endforeach;
    
    ?>
</table>

<?php 
$contenu= ob_get_clean();
require_once './Vue/gabarit.php';
?>
