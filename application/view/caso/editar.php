	<div class="right_col" role="main">

  <div class="x_panel">
    <div class="x_title">
      <h2>Gestión de casos</h2>
      <div class="row">
        
      </div>
      <div class="clearfix"></div>

    </div>
    <div class="x_content">


      <br />
  <form id="formA" name="f1" class="form-horizontal" method="POST" action="" onsubmit="return validate2()" autocomplete="off" >

    <div class="form-group row">

      <label for="telefono" class="col-md-1 control-label">Nº Cuenta</label>
              <div class="col-md-2" autofocus disabled>
               <input type="text" class="form-control input-sm input  soloNum" id="ncuentaca" name="ncuentaca" autofocus disabled>
              </div>

              <label for="cliente" class="col-md-1 control-label">Cliente</label >
              <div class="col-md-3">
                <input type="text" class="form-control input-sm input" name="nombreca" id="nombreca"  autofocus disabled>
              </div>

              

              
              <label for="documento" class="col-md-1 control-label">Dirección</label>
              <div class="col-md-4">
                <input type="text" class="form-control input-sm input" id="direccionca" name="direccionca" >
              </div>

             
              
            </div>

            

            <input type="text" name="id" id="id">

            <br>

             <div class="form-group row">

              <label for="telefono" class="col-md-1 control-label">Teléfono</label>
              <div class="col-md-2" autofocus disabled>
               <input type="text" class="form-control input-sm input  soloNum" id="telefonoca" name="telefonoca" autofocus disabled>
              </div>

              <label for="telefono" class="col-md-1 control-label">Ciudad</label>
              <div class="col-md-2">
               <input type="text" class="form-control input-sm input " id="ciudadca" name="ciudadca" class="" autofocus disabled>
              </div>

              <label for="cliente" class="col-md-2 control-label">Nombre de contacto</label >
              <div class="col-md-4">
                <input type="text" class="form-control input-sm input" name="nombredecca" id="nombredecca" autofocus disabled>
              </div>

            </div>

             <div class="form-group row">
              <br>

              <?php 

            $fecha1 = date("Y-m-d");
            
            ?>

              <label for="cliente" class="col-md-1 control-label">Responsable</label >
              <div class="col-md-3">
                <input type="text" class="form-control input-sm input" id="resca" name="resca" value="<?php if (isset($_SESSION['admin'])) {
                  echo $_SESSION['admin'];
                }else if (isset($_SESSION['vende'])) {
                  echo $_SESSION['vende'];
                } ?>" readonly >
              </div>

               <label for="cliente" class="col-md-1 control-label">Fecha</label >
              <div class="col-md-3">
     <input type="text" class="form-control input-sm input" id="fecca" name="fecca" value="<?php echo $fecha1 ?>" readonly>
              </div>

              </div>

            <br>
              <br>
            <div class="form-group row">
               
              <label for="nombredect" class="col-md-1 control-label">Falla</label >
              <div class="col-md-4">
             <!-- <?php foreach($caso as $p){ ?>
									<input name="fallaca" id="fallaca" value="<?php echo $p->id ?>"><?php echo $p->falla ?>
									<?php } ?> -->
              </div>

               <label for="cliente" class="col-md-2 control-label">Descripción</label >
              <div class="col-md-3">
                <textarea type="textarea" class="form-control input-sm input" name="descripcionca" id="descripcionca"></textarea>
              </div>

            </div>

             <div class="form-group row">

            <label for="nombredect" class="col-md-1 control-label">Estado</label >
              <div class="col-md-2">
             <SELECT name="estadoca" class="form-control input-sm input" onchange="if(this.value=='Solucionado') {document.getElementById('solucionado').disabled = false} else {document.getElementById('solucionado').disabled = true} ">
             <OPTION value="En proceso" selected>En proceso</OPTION>
             <OPTION value="Suspendido">Suspendido</OPTION>
             <OPTION value="Solucionado">Solucionado</OPTION>
             
             </SELECT>
 

              </div>

            

          </div>
          <br>

            <div class="form-group row">

            	<label for="cliente" class="col-md-2 control-label">Seguimiento</label >
              <div class="col-md-3">
                <textarea type="textarea" class="form-control input-sm input" name="seguimiento" id="seguimiento"></textarea>
              </div>


              <label for="cliente" class="col-md-2 control-label">Solucionado</label >
              <div class="col-md-3">
                 <textarea type="textarea" class="form-control input-sm input" name="solucionado" id="solucionado" required disabled></textarea>
              </div>



            </div>


            

           


          <div class="pull-right">
                 <main class="mdl-layout__content">
                <button type="submit" class="btn btn-primary" id="enviarca" name="enviarca">Agregar</button>
               </main>
          </div>
        </div>

        </form>
      </div>
    </div>
  </div> 



