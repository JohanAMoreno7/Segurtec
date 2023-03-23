  <div class="right_col" role="main">

  <div class="x_panel">
    <div class="x_title">
      <h2>Gestión de usuarios</h2>
      <div class="row">
        
      </div>
      <div class="clearfix"></div>

    </div>
    <div class="x_content">


      <br />
  <form id="formA" name="f1" class="form-horizontal" method="POST" action="<?php echo URL ?>Control/registraUsuario" autocomplete="off" onsubmit="return validate()">

    <div class="form-group row">
              <label for="cliente" class="col-md-1 control-label">Nombre</label >
              <div class="col-md-3">
                <input type="text" class="form-control input-sm input" name="user" id="user" onkeypress="return soloLetras(event)">
              </div>

              
              <label for="documento" class="col-md-1 control-label">Usuario</label>
              <div class="col-md-3">
                <input type="text" class="form-control input-sm input" id="email" name="email">
              </div>
              <label for="telefono" class="col-md-1 control-label">Cargo</label>
              <div class="col-md-2">

           <select class="form-control input-sm input" name="provincia" id="provincia" onchange="cargarPueblos();">

            <option></option>
              
          </select>
              </div>
            </div>

             <div class="form-group row">
              <label for="cliente" class="col-md-1 control-label">Rol</label >
              <div class="col-md-2">
                <select class="form-control input-sm input" name="pueblo" id="pueblo">
             
             </select>
              </div>


              
                              <label for="inputPassword4" class="col-md-1 control-label">Contraseña</label>
              <div class="col-md-3">
                <input type="password" class="form-control input-sm input" name="pasadmin" id="rpass1">
              </div>   


              <label for="inputPassword4" class="col-md-1 control-label">Repetir contraseña</label>
              <div class="col-md-3">
                <input type="password" class="form-control input-sm input" id="rpass" name="rpass">
              </div>
              
              
            </div>
          <div class="pull-right">
                 <main class="mdl-layout__content">
                <button type="submit" class="btn btn-primary" onclick="return comprobarClave()" id="enviaru" name="enviaru">Agregar</button>
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




  <script type="text/javascript">
    
  function cargarProvincias() {
    var array = ["Monitoreo", "Electronica" , "Laboratorio" , "Director"];
    array.sort();
    addOptions("provincia", array);
}


//Función para agregar opciones a un <select>.
function addOptions(domElement, array) {
    var selector = document.getElementsByName(domElement)[0];
    for (provincia in array) {
        var opcion = document.createElement("option");
        opcion.text = array[provincia];
        // Añadimos un value a los option para hacer mas facil escoger los pueblos
        opcion.value = array[provincia].toLowerCase()
        selector.add(opcion);
    }
}



function cargarPueblos() {
    // Objeto de provincias con pueblos
    var listaPueblos = {
      monitoreo: [2],
      electronica: [3],
      laboratorio: [4],
      director: [5]
    }
    
    var provincias = document.getElementById('provincia')
    var pueblos = document.getElementById('pueblo')
    var provinciaSeleccionada = provincias.value
    
    // Se limpian los pueblos
    pueblos.innerHTML = '<option value="">Seleccione un Rol...</option>'
    
    if(provinciaSeleccionada !== ''){
      // Se seleccionan los pueblos y se ordenan
      provinciaSeleccionada = listaPueblos[provinciaSeleccionada]
      provinciaSeleccionada.sort()
    
      // Insertamos los pueblos
      provinciaSeleccionada.forEach(function(pueblo){
        let opcion = document.createElement('option')
        opcion.value = pueblo
        opcion.text = pueblo
        pueblos.add(opcion)
      });
    }
    
  }
  
 // Iniciar la carga de provincias solo para comprobar que funciona
cargarProvincias();
  </script>

