<?php 
ob_start();
?>


<div class="from_titre"> <h3><i class="glyphicon glyphicon-list"></i>&nbsp;&nbsp;Liste des services</h3></div>
<table class="table table-bordered table-condensed table-responsive table-striped" id="list_tab">
    <tr id="tab_entet"  >
        <th style="color: green; font-family: verdana">N°</th>
        <th style="color: green; font-family: verdana">nom service</th>
        <th colspan="2" style="color: green; font-family: verdana">operations</th>

    </tr>


<?php 
    foreach ($listerservice as $servicee):
        
?>

<tr>
        <td align="center"><?= $servicee['id_service']; ?></td>
        <td><?= $servicee['nom_service']; ?></td>
    
        <td align="right"><a href="?c=Administrateur&amp;m=editerService&amp;id=<?= $servicee['id_service']; ?>"><img src=Assets/img/editer.png border=0/> </a></td>
        <td align="left"><a href="?c=Administrateur&amp;m=supprimerService&amp;id=<?= $servicee['id_service']; ?>"><img src=Assets/img/cancel.png border=0/></a></td>
        
        
</tr>

<?php
    
    endforeach;
    
    ?>
</table>

<?php 
$contenu= ob_get_clean();
require_once './Vue/gabarit.php';
?>