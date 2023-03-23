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
  <form id="formA" name="f1" class="form-horizontal" method="POST" action="<?php echo URL ?>caso/registraCaso" autocomplete="off" >

    <div class="form-group row">

      <label for="telefono" class="col-md-1 control-label">Nº Cuenta</label>
              <div class="col-md-2" autofocus disabled>
               <input type="text" class="form-control input-sm input  soloNum" id="ncuenta" name="ncuenta" autofocus disabled>
              </div>

              <label for="cliente" class="col-md-1 control-label">Cliente</label >
              <div class="col-md-3">
                <input type="text" class="form-control input-sm input" name="nombre" id="nombre" autofocus disabled>
              </div>

              <input type="hidden" name="idcliente" id="idcliente">

              
              <label for="documento" class="col-md-1 control-label">Dirección</label>
              <div class="col-md-4">
                <input type="text" class="form-control input-sm input" id="direccion" name="direccion" autofocus disabled>
              </div>

              
              
            </div>

            <br>

             <div class="form-group row">

              <label for="telefono" class="col-md-1 control-label">Teléfono</label>
              <div class="col-md-2" autofocus disabled>
               <input type="text" class="form-control input-sm input  soloNum" id="telefono" name="telefono" autofocus disabled>
              </div>

              <label for="telefono" class="col-md-1 control-label">Ciudad</label>
              <div class="col-md-2">
               <input type="text" class="form-control input-sm input " id="ciudad" name="ciudad" class="" autofocus disabled>
              </div>

              <label for="cliente" class="col-md-2 control-label">Nombre de contacto</label >
              <div class="col-md-3">
                <input type="text" class="form-control input-sm input" name="nombredec" id="nombredec" autofocus disabled>
              </div>

              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalP">
                  <span class="glyphicon glyphicon-search"></span>
                </button>

            </div>

             <div class="form-group row">
              <br>

              <?php 

            $fecha1 = date("Y-m-d");
            
            ?>

              <label for="cliente" class="col-md-1 control-label">Responsable</label>
              <div class="col-md-3">
                <input type="text" class="form-control input-sm input" id="res" name="res" value="<?php if (isset($_SESSION['admin'])) {
                  echo $_SESSION['admin'];
                }else if (isset($_SESSION['vende'])) {
                  echo $_SESSION['vende'];
                }else if (isset($_SESSION['elect'])) {
                  echo $_SESSION['elect'];
                } ?>" readonly >
              </div>

               <label for="cliente" class="col-md-1 control-label">Fecha</label >
              <div class="col-md-3">
     <input type="text" class="form-control input-sm input" id="fec" name="fec" value="<?php echo $fecha1 ?>" readonly>
              </div>

              </div>

            <br>
              <br>
            <div class="form-group row">
               
              <label for="nombredect" class="col-md-1 control-label">Falla</label >
              <div class="col-md-4">
              <select class="form-control input-sm input" name="falla" id="falla">
                
              <option></option>

              <option>Fallo de energía</option>

               <option>Fallo de batería</option>

                <option>Incomunicado</option>

                 <option>Asignación de claves</option>

                  <option>Fallo de CCTV (incluye revisión de cámaras y DVR)</option>

                   <option>Fallo de sistema de alarma (incluye revisión de zona en falla, sirena dañada)</option>

                    <option>Cotización</option>

                     <option>Desenlace</option>


              </select>
              </div>

               <label for="cliente" class="col-md-2 control-label">Descripción</label >
              <div class="col-md-3">
                <textarea type="textarea" class="form-control input-sm input" name="descripcion" id="descripcion"></textarea>
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


  <div class="modal fade" id="modalP" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel" style="color: white "><i class='glyphicon glyphicon-edit'></i> Listado de clientes</h4>
        </div>

        <div class="modal-body" style="color: black">
          <form id="formA" class="form-horizontal" method="POST" action="" autocomplete="off">
            <div class="form-group">
              <br>
              <div class="row table-responsive">
                <table id="listas2" class="table table-hover table-condensed table-bordered">
                  <thead class="tableH">
                    <tr>
                      <th>Nº CUENTA</th>
                      <th>CLIENTE</th>
                      <th>CIUDAD</th>
                      <th>DIRECCIÓN</th>
                      <th>TELÉFONO</th>
                      <th>NOMBRE DE CONTACTO</th>
                      <th>OPCIÓN</th>

                    </tr>
                  </thead>
                  <tbody>
                         <?php foreach ($clienter as $cliente) { ?>
                          <td><?php if(isset($cliente->ncuenta)) echo htmlspecialchars($cliente->ncuenta, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if(isset($cliente->nombre)) echo htmlspecialchars($cliente->nombre, ENT_QUOTES, 'UTF-8'); ?></td>
                   
                    <td><?php if(isset($cliente->ciudad)) echo htmlspecialchars($cliente->ciudad, ENT_QUOTES, 'UTF-8'); ?></td>

                    <td><?php if(isset($cliente->direccion)) echo htmlspecialchars($cliente->direccion, ENT_QUOTES, 'UTF-8'); ?></td>

                    <td><?php if(isset($cliente->telefono)) echo htmlspecialchars($cliente->telefono, ENT_QUOTES, 'UTF-8'); ?></td>

                    <td><?php if(isset($cliente->nombredec)) echo htmlspecialchars($cliente->nombredec, ENT_QUOTES, 'UTF-8'); ?></td>


          <td style="text-align: center"><a href="#" class="btn btn-primary btn-xs" data-dismiss="modal"  onclick="Tcliente(<?= $cliente->idcliente ?>)"><i class="fa fa-pencil"></i> Agregar </a></td>

                    </tr>
                    <?php } ?>  
                  </tbody>
                </table>

              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
