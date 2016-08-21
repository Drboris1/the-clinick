
<div class="media user-media well-small">
    <a class="user-link" href="#">
        <img class="media-object img-thumbnail user-img" alt="User Picture" src="http://localhost/clinik/Assets/img/adminboris.jpg" />
    </a>
    <br />
    <div class="media-body">
        <h5 class="media-heading"> Boris N</h5>
        <ul class="list-unstyled user-info">
            
            <li>
                 <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> connecté
               
            </li>
           
        </ul>
    </div>
    <br />
</div>

<ul id="menu" class="collapse">

    
    <li class="panel active">
        <a href="?c=Administrateur" >
            <i class="icon-table"></i> Parametrage Système

           
        </a>                   
    </li>



    <li class="panel ">
        <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
            <i class="icon-tasks"> </i> SERVICES    

            <span class="pull-right">
              <i class="icon-angle-left"></i>
            </span>
           &nbsp; <span class="label label-default">2</span>&nbsp;
        </a>
        <ul class="collapse" id="component-nav">
           
            <li class=""><a href="?c=Administrateur&amp;m=Ajouterservice"><i class="icon-angle-right"></i>Ajouter service </a></li>
             <li class=""><a href="?c=Administrateur&amp;m=Listerservice"><i class="icon-angle-right"></i> Lister service</a></li>
        </ul>
    </li>
    
<!--    le personnel-->
<li class="panel">
        <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav">
            <i class="icon-bar-user"></i> PERSONNELS

            <span class="pull-right">
                <i class="icon-angle-left"></i>
            </span>&nbsp; <span class="label label-danger">2</span>&nbsp;
        </a>
        <ul class="collapse" id="chart-nav">



            <li><a href="?c=personnel&amp;m=addPersonnel"><i class="icon-angle-right"></i> Ajouter personnel </a></li>
            <li><a href="?c=personnel&amp;m=listerpersonnel"><i class="icon-angle-right"></i> Lister personnels</a></li>
        </ul>
    </li>
    <!-- fin du personnel-->
    
    <!--    le compteuser-->
<li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesbr-nav">
                        <i class="icon-table"></i> GESTION DES COMPTES
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-primary">2</span>&nbsp;
                    </a>
                    <ul class="collapse" id="pagesbr-nav">
                        <li><a href="?c=Compteuser&amp;m=savecpteuser"><i class="icon-angle-right"></i> Ajouter un compte </a></li>
                        <li><a href="pages_timeline.html"><i class="icon-angle-right"></i> Lister comptes </a></li>
                        
                    </ul>
                </li>
    <!-- fin du cpteuser-->
    <li class="panel ">
        <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
            <i class="icon-pencil"></i> CHAMBRES

            <span class="pull-right">
                <i class="icon-angle-left"></i>
            </span>
              &nbsp; <span class="label label-success">2</span>&nbsp;
        </a>
        <ul class="collapse" id="form-nav">
            <li class=""><a href="?c=Chambre&amp;m=addChambrehospi"><i class="icon-angle-right"></i>Ajouter chambre </a></li>
            <li class=""><a href="?c=Chambre&amp;m=listerchambre"><i class="icon-angle-right"></i>Lister chambre </a></li>
        </ul>
    </li>

    <li class="panel">
        <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
            <i class="icon-table"></i> Lits

            <span class="pull-right">
                <i class="icon-angle-left"></i>
            </span>
              &nbsp; <span class="label label-info">2</span>&nbsp;
        </a>
        <ul class="collapse" id="pagesr-nav">
            <li><a href="?c=Lit&amp;m=addlit"><i class="icon-angle-right"></i>Ajouter lit</a></li>
            <li><a href="#"><i class="icon-angle-right"></i>Lister lits </a></li>
        </ul>
    </li>
    

    <li><a href="gallery.html"><i class="icon-film"></i> Gerer les Logs </a></li>

</ul>

<hr>

<ul id="menu" class="collapse">

    
    <li class="panel active">
        <a href="?c=Administrateur" >
            <i class="icon-table"></i> les infos utiles

           
        </a>                   
    </li>

  <li><a href="?c=Administrateur&amp;m=listervuepersonnelservice"><i class="icon-film"></i> Personnels par Services</a></li>

    <li><a href="gallery.html"><i class="icon-film"></i> Fiche medic par chambre </a></li>
    <li><a href="#"><i class="icon-film"></i> Patient par chambre</a></li>

    <li><a href="gallery.html"><i class="icon-film"></i> Personnel consult </a></li>

    
    <li><a href="#"><i class="icon-film"></i> autres</a></li>

    <li><a href="gallery.html"><i class="icon-film"></i> other </a></li>

</ul>


<!--END MENU SECTION -->