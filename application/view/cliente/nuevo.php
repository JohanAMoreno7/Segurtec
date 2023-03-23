	  <div class="right_col" role="main">

  <div class="x_panel">
    <div class="x_title">
      <h2>Gestión de clientes</h2>
      <div class="row">
        
      </div>
      <div class="clearfix"></div>

    </div>
    <div class="x_content">


      <br />
  <form id="formA" name="f1" class="form-horizontal" method="POST" action="<?php echo URL ?>cliente/registraCliente" autocomplete="off" onsubmit="return validarclienr()">

    <div class="form-group row">

      <label for="cliente" class="col-md-1 control-label">Nº De cuenta</label >
              <div class="col-md-2">
                <input type="text" class="form-control input-sm input" name="ncuenta" id="ncuenta" >
              </div>

              <label for="cliente" class="col-md-1 control-label">Cliente</label >
              <div class="col-md-3">
                <input type="text" class="form-control input-sm input" name="nombre" id="nombre" >
              </div>

              
              <label for="documento" class="col-md-1 control-label">Dirección</label>
              <div class="col-md-3">
                <input type="text" class="form-control input-sm input" id="direccion" name="direccion">
              </div>
              
            </div>

            <br>

             <div class="form-group row">

              <label for="telefono" class="col-md-1 control-label">Teléfono</label>
              <div class="col-md-2">
               <input type="text" class="form-control input-sm input  soloNum" id="telefono" name="telefono" class="">
              </div>

              <label for="telefono" class="col-md-1 control-label">Ciudad</label>
              <div class="col-md-3">
               <input type="text" class="form-control input-sm input " id="ciudad" name="ciudad" class="">
              </div>

              <label for="cliente" class="col-md-2 control-label">Nombre de contacto</label >
              <div class="col-md-3">
                <input type="text" class="form-control input-sm input" name="nombredec" id="nombredec">
              </div>

            </div>
            <br>
          <div class="pull-right">
                 <main class="mdl-layout__content">
                <button type="submit" class="btn btn-primary" id="enviarc" name="enviarc">Agregar</button>
               </main>
          </div>
        </div>

        </form>
      </div>
    </div>
  </div> 
