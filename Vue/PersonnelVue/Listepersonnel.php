<?php 
ob_start();
?>

<div class="from_titre"> <h3><i class="glyphicon glyphicon-list"></i>&nbsp;&nbsp;Liste du personnel</h3></div>
<table class="table table-bordered table-condensed " id="list_tab">
    <tr id="tab_entet">
        <th style="color: green; font-family: verdana">N°</th>
        <th style="color: green; font-family: verdana">nom</th>
        <th style="color: green; font-family: verdana">prenom</th>
        <th style="color: green; font-family: verdana">tel</th>
        <th style="color: green; font-family: verdana">matricule</th>
        <th style="color: green; font-family: verdana">age</th>
        <th style="color: green; font-family: verdana">sexe</th>
        <th style="color: green; font-family: verdana">date prise service</th>
        <th style="color: green; font-family: verdana">email</th>
        <th style="color: green; font-family: verdana">poste occupé</th>
        <th style="color: green; font-family: verdana">spécialite</th>
        <th colspan="2" style="color: green; font-family: verdana">operations</th>
        
    </tr>
    <?php 
    foreach ($listepersonnel as $personnel):
        
    ?>
    <tr>
        <td ><?= $personnel['id_personnel']; ?></td>
        <td ><?= $personnel['nom_perso']; ?></td>
        <td ><?= $personnel['prenom_perso']; ?></td>
        <td ><?= $personnel['tel_perso']; ?></td>
        <td ><?= $personnel['matricule_perso']; ?></td>
        <td ><?= $personnel['age_perso']; ?></td>
        <td ><?= $personnel['sexe_perso']; ?></td>
        <td ><?= $personnel['dat_prise_service']; ?></td>
        <td ><?= $personnel['email_perso']; ?></td>
        <td ><?= $personnel['type_perso']; ?></td>
        <td ><?= $personnel['specialite']; ?></td>
        <td align="right"><a href="?c=Personnel&amp;m=editerPersonnel&amp;id=<?= $personnel['id_personnel']; ?>"><img src=Assets/img/editer.png border=0/> </a></td>
        <td align="left"><a href="#"><img src=Assets/img/cancel.png border=0/></a></td>
    </tr>
    <?php
    
    endforeach;
    
    ?>
</table>

<?php 
$contenu= ob_get_clean();
require_once './Vue/gabarit.php';
?>