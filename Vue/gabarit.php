<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> 
<html lang="fr"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>page administrateur </title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="http://localhost/clinik/Assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="http://localhost/clinik/Assets/css/main.css" />
    <link rel="stylesheet" href="http://localhost/clinik/Assets/css/theme.css" />
    <link rel="stylesheet" href="http://localhost/clinik/Assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="http://localhost/clinik/Assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="http://localhost/clinik/Assets/css/layout2.css" rel="stylesheet" />
    <link href="http://localhost/clinik/Assets/plugins/flot/examples/examples.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://localhost/clinik/Assets/plugins/timeline/timeline.css" />
    
    <style type="text/css">
        .adonis{
            margin: 0px;
        }
    </style>
</head>

    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body class="padTop53 " >
    <!-- MAIN WRAPPER -->
    <div class="row adonis" >
        <div id="top">
            <!-- ici on va afficher la bare qui est dans top -->
            <?php echo include 'header.php'; ?>
        </div>
        
        <div id="left" class="col-sm-2" ><!-- ici on inclu le menu de gauche -->
            <?php echo include 'left_side_admin.php'; ?>
        </div>
        
        <div id="content" class="col-sm-12"><!-- ici on inclu la page a afficher -->
            <?php echo $contenu; ?>
        </div>
        
<!--        <div id="right" class="col-sm-2"> ici on inclu le menu de droite 
            <?php //echo include 'right_side_admin.php'; ?>
        </div>-->
    </div>  
    <div id="footer"><!-- ici on inclu le footere -->
        <?php echo include 'footer.php'; ?>
    </div>
    
    
    <script src="http://localhost/clinik/Assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="http://localhost/clinik/Assets/plugins/bootstrap/js/bootstrap.min.js"></script>
     <script src="http://localhost/clinik/Assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="http://localhost/clinik/Assets/plugins/flot/jquery.flot.js"></script>
    <script src="http://localhost/clinik/Assets/plugins/flot/jquery.flot.resize.js"></script>
    <script src="http://localhost/clinik/Assets/plugins/flot/jquery.flot.time.js"></script>
    <script  src="http://localhost/clinik/Assets/plugins/flot/jquery.flot.stack.js"></script>
    <script src="http://localhost/clinik/Assets/js/for_index.js"></script>
</body>
</html>