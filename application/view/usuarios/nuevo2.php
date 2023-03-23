  <div class="right_col" role="main">

  <div class="x_panel">
    <div class="x_title">
      <h2>Gestión de empleados</h2>
      <div class="row">
        
      </div>
      <div class="clearfix"></div>

    </div>
    <div class="x_content">


      <br />
  <form id="formA" name="f1" class="form-horizontal" method="POST" action="<?php echo URL ?>Control/registraUsuario2" autocomplete="off" >

    <div class="form-group row">
              <label for="cliente" class="col-md-1 control-label">Nombre</label >
              <div class="col-md-3">
                <input type="text" class="form-control input-sm input" name="user" id="user" onkeypress="return soloLetras(event)">
              </div>

              
              <label for="documento" class="col-md-1 control-label">Usuario</label>
              <div class="col-md-3">
                <input type="text" class="form-control input-sm input" id="email" name="email">
              </div>
              <label for="telefono" class="col-md-1 control-label">Fecha de nacimiento</label>
              <div class="col-md-2">
           <input type="date" class="form-control input-sm input" name="fechanacimiento" id="fechanacimiento" >
          
              </div>
               <input type="hidden" class="form-control input-sm input" name="provincia" id="provincia" value="Empleado" readonly>
            </div>

             <div class="form-group row">

              <input type="hidden" class="form-control input-sm input" name="pueblo" id="pueblo" value="6" readonly>


              <label for="telefono" class="col-md-2 control-label">Número de placa</label>
              <div class="col-md-2">
           <input type="text" class="form-control input-sm input" name="nplaca" id="nplaca" >
          
              </div>

              <label for="telefono" class="col-md-3 control-label">Documento de identidad</label>
              <div class="col-md-2">
           <input type="text" class="form-control input-sm input" name="documento" id="documento" >
          
              </div>


              
                           
              
              
            </div>

            <div class="form-group row">

                 <label for="inputPassword4" class="col-md-1 control-label">Contraseña</label>
              <div class="col-md-3">
                <input type="password" class="form-control input-sm input" name="pasadmin" id="rpass1">
              </div>   


              <label for="inputPassword4" class="col-md-3 control-label">Repetir contraseña</label>
              <div class="col-md-3">
                <input type="password" class="form-control input-sm input" id="rpass" name="rpass">
              </div>

            </div>
          <div class="pull-right">
                 <main class="mdl-layout__content">
                <button type="submit" class="btn btn-primary" onclick="return comprobarClave()" id="enviarut" name="enviarut">Agregar</button>
               </main>
          </div>
        </div>

        </form>
      </div>
    </div>
  </div> 


  



<script type="text/javascript">
function comprobarClave($valor){ 
    clave1 = document.f1.pasadmin.value; 
    clave2 = document.f1.rpass.value; 

   if (clave1 != clave2) {
      var rpass1 = document.getElementById("rpass1");
      var rpass = document.getElementById("rpass");
      rpass1.style.border = "1px solid red";
      rpass.style.border = "1px solid red";

      alertify.error("Las contraseñas no coinciden");

      return false;

 
   }else{
  
    return true;
   }

} 
                </script>




  