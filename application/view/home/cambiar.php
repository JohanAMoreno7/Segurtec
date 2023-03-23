    <div class="right_col" role="main">

  <div class="x_panel">
    <div class="x_title">
      <h2>Cambio de contraseña</h2>
      <div class="row">
        
      </div>
      <div class="clearfix"></div>

    </div>
    <div class="x_content">


      <br />
  <form id="formA" name="f1" class="form-horizontal" method="POST" action="<?php echo URL ?>home/cambiarPass" autocomplete="off" >

    <div class="form-group row">

      <label for="cliente" class="col-md-2 control-label">Nueva contraseña</label >
              <div class="col-md-2">
                <input type="password" class="form-control input-sm input" name="pasado" id="pasado1" >
              </div>

              <label for="cliente" class="col-md-2 control-label">Confirmar contraseña</label >
              <div class="col-md-3">
                <input type="password" class="form-control input-sm input" name="pasao" id="pasao2" >
              </div>


              <input type="hidden" class="form-control input-sm input" id="idperson" name="idperson" value="<?php if (isset($_SESSION['vende'])) {
                  echo $_SESSION['Monitoreo'];
                }else if (isset($_SESSION['elect'])) {
                  echo $_SESSION['Electronica'];
                }else if (isset($_SESSION['lab'])) {
                  echo $_SESSION['Laboratorio'];
                }else if (isset($_SESSION['dir'])) {
                  echo $_SESSION['Director'];
                }else if (isset($_SESSION['empl'])) {
                  echo $_SESSION['Empleado'];
                } ?>" readonly >

              
             
            </div>




        

            <br>
          <div class="pull-right">
                 <main class="mdl-layout__content">
                <button type="submit" class="btn btn-primary" id="enviarc" name="enviarcambio" onclick="return comprobarC()">Agregar</button>
               </main>
          </div>
        </div>

        </form>
      </div>
    </div>
  </div> 


  <script type="text/javascript">
function comprobarC($valor){ 
    clave1 = document.f1.pasado.value; 
    clave2 = document.f1.pasao.value; 

   if (clave1 != clave2) {
      var pasado1 = document.getElementById("pasado1");
      var pasao2 = document.getElementById("pasao2");
      pasado1.style.border = "1px solid red";
      pasao2.style.border = "1px solid red";

      alertify.error("Las contraseñas no coinciden");

      return false;

 
   }else{
  
    return true;
   }

} 
                </script>


            











