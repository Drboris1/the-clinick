<?php 
ob_start();
?>


<div class="from_titre"> <h3><i class="glyphicon glyphicon-list"></i>&nbsp;&nbsp;Liste des chambres</h3></div>
<table class="table table-bordered table-condensed table-responsive table-striped" id="list_tab">
    <tr id="tab_entet">
         <th style="color: green; font-family: verdana">N°</th>
        <th style="color: green; font-family: verdana">Cbre N°</th>
        <th style="color: green; font-family: verdana">type de chambre</th>
        <th style="color: green; font-family: verdana">Telephone</th>
        <th style="color: green; font-family: verdana">Nombre de lits</th>
        <th style="color: green; font-family: verdana">Etat(O/N)</th>
        <th style="color: green; font-family: verdana">Prix</th>
        <th style="color: green; font-family: verdana">Date d'entree</th>
        <th style="color: green; font-family: verdana">Date de sortie</th>
        <th colspan="2" style="color: green; font-family: verdana">operations</th>

    </tr>


<?php 
    foreach ($liste as $chambre):
        
?>

<tr>
        <td align="center"><?= $chambre['id_chambre']; ?></td>
        <td><?= $chambre['numero_chambre']; ?></td>
        <td><?= $chambre['type_chambre']; ?></td>
        <td><?= $chambre['num_tel']; ?></td>
        <td><?= $chambre['nbre_lit']; ?></td>
        <td><?= $chambre['etat_occupation']; ?></td>
        <td><?= $chambre['prix_chambre']; ?></td>
        <td><?= $chambre['date_entre']; ?></td>
        <td><?= $chambre['date_sortie']; ?></td>
    
        <td align="right"><a href="?c=Chambre&amp;m=editerService&amp;id=<?= $chambre['id_chambre']; ?>"><img src=Assets/img/editer.png border=0/> </a></td>
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
