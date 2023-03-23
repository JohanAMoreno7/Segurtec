<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>SegurtecV2</title>

  
  <link rel="icon" href="<?= URL ?>img/segurtec2.png" type="image/ico" />
  <script src="<?=  URL ?>vendors/alertify/alertify.js"></script>
  <link href="<?=  URL ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=  URL ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?=  URL ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
  <link href="<?=  URL ?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <link href="<?=  URL ?>/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <link href="<?=  URL ?>/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
  <link href="<?=  URL ?>/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  <link href="<?=  URL ?>/build/css/custom.min.css" rel="stylesheet">
  <link rel="stylesheet"  href="<?=  URL ?>vendors/alertify/css/themes/default.css">
  <link rel="stylesheet"  href="<?=  URL ?>vendors/alertify/css/alertify.css">
  <link rel="stylesheet"  href="<?=  URL ?>/vendors/calendario/css/fullcalendar.min.css">
  <link rel="stylesheet" type="text/css" href="<?=  URL ?>/vendors/miCss/misEstilos.css">

   <link rel="stylesheet" type="text/css" href="<?=  URL ?>vendors/clockpicker/dist/bootstrap-clockpicker.min.css">

   
</head>




<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="<?= URL ?>home/index" class="site_title"><i class="fa fa-expeditedssl"></i> <span>  SegurtecV2</span></a>
          </div>

          <div class="clearfix"></div>

          <br />
          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="<?= URL ?>home/index"><i class="fa fa-home"></i> Inicio </a>

                </li>
              <?php if (!isset($_SESSION["Laboratorio"]) && !isset($_SESSION["Director"]) && !isset($_SESSION["Empleado"])) { ?>
                <li><a href="<?php echo URL; ?>cliente/index"><i class="fa fa-black-tie"></i> Clientes</a>
                </li>
                 <?php } ?>
                <?php if (!isset($_SESSION["Laboratorio"]) && !isset($_SESSION["Director"]) && !isset($_SESSION["Empleado"])) { ?>
                <li><a href="<?php echo URL; ?>caso/index"><i class="fa fa-bookmark"></i> Caso</a>
                </li>
                 <?php } ?>
                 <?php if (!isset($_SESSION["Monitoreo"]) && !isset($_SESSION["Electronica"]) && !isset($_SESSION["Director"]) && !isset($_SESSION["Empleado"])) { ?>
                <li><a href="<?php echo URL; ?>laboratorio/index"><i class="fa fa-cogs"></i> Laboratorio</a>
                </li>
              <?php } ?>

              <?php if (!isset($_SESSION["Monitoreo"]) && !isset($_SESSION["Electronica"]) && !isset($_SESSION["Laboratorio"]) && !isset($_SESSION["Administrador"]) && !isset($_SESSION["Director"])) { ?>
              <li><a href="<?php echo URL; ?>tiquetera/index"><i class="glyphicon glyphicon-briefcase"></i>  Tiquetera emocional</a>
                </li>
                 <?php } ?>

                 <?php if (!isset($_SESSION["Empleado"])  && !isset($_SESSION["Laboratorio"]) && !isset($_SESSION["Electronica"]) && !isset($_SESSION["Monitoreo"])) { ?>
              <li><a href="<?php echo URL; ?>tiquetera/index2"><i class="glyphicon glyphicon-briefcase"></i>  Tiquetera emocional</a>
                </li>
                 <?php } ?>
            </div>
          </div>
        </div>
      </div>


      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                 <i class="fa fa-user fa-fw"></i><?php if (isset($_SESSION["admin"])) {
                   echo $_SESSION["admin"];
                 }elseif (isset($_SESSION["vende"])) {
                   echo $_SESSION["vende"];
                 }elseif (isset($_SESSION["elect"])) {
                   echo $_SESSION["elect"];
                 }elseif (isset($_SESSION["lab"])) {
                   echo $_SESSION["lab"];
                 }elseif (isset($_SESSION["dir2"])) {
                   echo $_SESSION["dir2"];
                   }elseif (isset($_SESSION["empl"])) {
                   echo $_SESSION["empl"];
                   }  ?>
                 <span class=" fa fa-angle-down"></span>
               </a>
               <ul class="dropdown-menu dropdown-usermenu pull-right">
              <!--   <?php  echo $_SESSION["admin"]; ?>
                <?php  echo $_SESSION["admin2"]; ?>
                <?php  echo $_SESSION["admin3"]; ?> -->


                <img src="<?= URL ?>img/segurtec.png" class="img-thumbnail profile_img"
                width="400" height="100">
              
    
              
                <?php if (isset($_SESSION["admin"])) { ?>

                  <p>

                <center><b><?php echo $_SESSION["admin"]; ?></b></center>
                <br>
                <center><b><?php echo $_SESSION["admin2"]; ?></b></center>
               
                

                

                 <?php }elseif (isset($_SESSION["vende"])) { ?>
                  
                  <br>
 
                  <center><b><?php echo $_SESSION["vende"]; ?></b></center>
                <br>
                <center><b><?php echo $_SESSION["vende2"]; ?></b></center>
                <br>
                <center><b><?php echo $_SESSION["vende3"]; ?></b></center>

              <?php }elseif (isset($_SESSION["elect"])) { ?>
                <br>
                <br>
 
                  <center><b><?php echo $_SESSION["elect"]; ?></b></center>
                <br>
                <center><b><?php echo $_SESSION["elect2"]; ?></b></center>
                <br>
                <center><b><?php echo $_SESSION["elect3"]; ?></b></center>


                  <?php }elseif (isset($_SESSION["lab"])) { ?>

                    <br>
                    <br>
 
                  <center><b><?php echo $_SESSION["lab"]; ?></b></center>
                <br>
                <center><b><?php echo $_SESSION["lab2"]; ?></b></center>
                <br>
                <center><b><?php echo $_SESSION["lab3"]; ?></b></center>

              <?php }elseif (isset($_SESSION["dir"])) { ?>

                 <br>
                    <br>
 
                  <center><b><?php echo $_SESSION["dir"]; ?></b></center>
                <br>
                <center><b><?php echo $_SESSION["dir2"]; ?></b></center>
                <br>
                <center><b><?php echo $_SESSION["dir3"]; ?></b></center>


              <?php }elseif (isset($_SESSION["empl"])) { ?>

                 <br>
                    <br>
 
                  <center><b><?php echo $_SESSION["empl"]; ?></b></center>
                <br>
                <center><b><?php echo $_SESSION["empl2"]; ?></b></center>
                <br>
                <center><b><?php echo $_SESSION["empl3"]; ?></b></center>




              <?php } ?>




                 <br>
                 <br>

                  </p>

                <?php if (isset($_SESSION["Administrador"]) == 1) { ?>
                <center><li id="ratz"><a href="<?php echo URL; ?>control/index"> Control de usuarios</a></li></center>
                <br>
               

               

                <?php } ?>


                <?php if (!isset($_SESSION["Monitoreo"]) && !isset($_SESSION["Electronica"]) && !isset($_SESSION["Laboratorio"]) && !isset($_SESSION["Empleado"]) ) { ?>

                   <center><li id="ratz"><a href="<?php echo URL; ?>control/index2"> Registrar de empleados</a></li></center>
                 
                 
                <?php  } ?>

                <?php if (!isset($_SESSION["Administrador"]) == 1) { ?>
                <center><li id="ratz"><a href="<?php echo URL; ?>home/cambiar"> Cambiar contraseña</a></li></center>

                  <?php } ?>

                 


                

                <br>
                <br>
                <br>

                <form method="POST" action="<?php echo URL; ?>login/cerrar">
                  <center><button type="submit" name="cerrar" id="cerrar"><li><a><i class="fa fa-sign-out pull-right"></i> Cerrar sesión</a></li></button></center>
                </form>
              </ul>            </li>

              


            </ul>
          </nav>
        </div>
      </div>


      <style type="text/css">
        
        p {
   border: red 2px solid;
  margin: 20px;
}


   #cerrar {
        
      padding: 5px 35px;

    }



      </style>
    