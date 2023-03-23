 <div class="right_col" role="main">

  <div class="x_panel">
    <div class="x_title">


   <?php if (!isset($_SESSION["Laboratorio"]) && !isset($_SESSION["Director"]) && !isset($_SESSION["Empleado"])) { ?>
     <center> <img src="<?= URL ?>img/logoser.png"
                width="1020" height="690">
    </center>
     <?php } ?>

    <?php if (!isset($_SESSION["Administrador"]) && !isset($_SESSION["Monitoreo"]) && !isset($_SESSION["Electronica"])) { ?>
    <center> <img src="<?= URL ?>img/logoter.png"
                width="1020" height="690">
    </center>
    <?php } ?>
    

   
  
  <div class="row">

    <h1></h1>

 


    <input type="hidden" class="form-control input-sm input" id="res" name="res" value="<?php if (isset($_SESSION['vende'])) {
                  echo $_SESSION['Monitoreo'];
                }else if (isset($_SESSION['elect'])) {
                  echo $_SESSION['Electronica'];
                } ?>" readonly >


 
  </div>
</div>
</div>
</div>


<!-- /page content -->

<?php 
if (isset($_SESSION['MSJ'])) {
  echo $_SESSION['MSJ'];
  unset($_SESSION['MSJ']);
}

if (isset($_SESSION['MSJV'])) {
  echo $_SESSION['MSJV'];
  unset($_SESSION['MSJV']);
}

if (isset($_SESSION['ZIZIZAS'])) {
  echo $_SESSION['ZIZIZAS'];
  unset($_SESSION['ZIZIZAS']);
}






?>

