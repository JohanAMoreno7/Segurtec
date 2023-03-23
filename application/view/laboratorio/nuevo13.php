  <div class="right_col" role="main">

  <div class="x_panel">
    <div class="x_title">
      <h2>Gestión de equipos</h2>
      <div class="row">
        
      </div>
      <div class="clearfix"></div>

    </div>
    <div class="x_content">

      <FORM name=combos>
<select onChange=nav(this.value) name=combo1 class=menudespl width="200">
<OPTION selected>Selecciona</OPTION>
<OPTION value="<?php echo URL ?>Laboratorio/nuevo">Camaras</OPTION>
<OPTION value="<?php echo URL ?>Laboratorio/nuevo2">Dvrs</OPTION>
<OPTION value="<?php echo URL ?>Laboratorio/nuevo3">Magneticos y sensores</OPTION>
<OPTION value="<?php echo URL ?>Laboratorio/nuevo4">Monitores</OPTION>
<OPTION value="<?php echo URL ?>Laboratorio/nuevo5">Discos duros</OPTION>
<OPTION value="<?php echo URL ?>Laboratorio/nuevo6">Paneles de alarma</OPTION>
<OPTION value="<?php echo URL ?>Laboratorio/nuevo7">Teclados de alarmas</OPTION>
<OPTION value="<?php echo URL ?>Laboratorio/nuevo8">Comunicadores  gprs</OPTION>
<OPTION value="<?php echo URL ?>Laboratorio/nuevo9">Tarjetas de video </OPTION>
<OPTION value="<?php echo URL ?>Laboratorio/nuevo10">Tarjetas de alarmas</OPTION>
<OPTION value="<?php echo URL ?>Laboratorio/nuevo11">Equipos de computo</OPTION>
<OPTION value="<?php echo URL ?>Laboratorio/nuevo12">Varios equipos</OPTION>
<OPTION value="<?php echo URL ?>Laboratorio/nuevo13">Memorandos</OPTION>
<OPTION value="<?php echo URL ?>Laboratorio/nuevo14">Equipos de baja</OPTION>
<OPTION value="<?php echo URL ?>Laboratorio/nuevo15">Equipos reparados</OPTION>
<OPTION value="<?php echo URL ?>Laboratorio/nuevo16">Mantenimiento planta</OPTION>
</select>
</FORM>


      <br />
  <form id="formA" name="f1" class="form-horizontal" method="POST" action="<?php echo URL ?>Laboratorio/registraEquipo" autocomplete="off">

    <div class="form-group row">


    <?php 

            $fecha16 = date("Y-m-d");
            
            ?>

      <label for="cliente" class="col-md-2 control-label">Fecha de ingreso</label >
          <div class="col-md-2">
             <input type="date" class="form-control input-sm input" id="fec" name="fec" value="<?php echo $fecha16 ?>" readonly>
            </div>

<input name="chec" type="checkbox" id="chec" onChange="comprobar(this);"/>
    <label for="chec">Activar</label>

              </div>

              <?php 

            $fecha16 = date("Y-m-d");
            $nuevafecha = strtotime ( '+5 day' , strtotime ( $fecha16 ) ) ;
            $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
            
            ?>

              <div class="form-group row">
              <label for="cliente" class="col-md-2 control-label">Fecha de entrega</label >
              <div class="col-md-2">
                <input type="input" class="form-control input-sm input" name="fece" id="fece" value="<?php echo $nuevafecha ?>" readonly>
              </div>

            </div>

          <div class="form-group row">
              <label for="cliente" class="col-md-2 control-label">Codigo del almacen</label >
              <div class="col-md-2">
                <input type="text" class="form-control input-sm input" name="codigo" id="codigo" >
              </div>

            </div>

            <div class="form-group row">
              <label for="cliente" class="col-md-2 control-label">Codigo de Laboratorio (LB)</label >
              <div class="col-md-2">
                <input type="text" class="form-control input-sm input" name="codigolab" id="codigolab" >
              </div>
         
            </div>

            <div class="form-group row">
              <label for="cliente" class="col-md-2 control-label">Control del Laboratorio</label >
              <div class="col-md-2">
                <input type="text" class="form-control input-sm input" name="controlab" id="controlab" >
              </div>
         
            </div>

             <div class="form-group row">
              <label for="cliente" class="col-md-2 control-label">Codigo de referencia</label >
              <div class="col-md-1">
                <input type="text" class="form-control input-sm input" name="codigor" id="codigor" value="9001" readonly>
              </div>
         
            </div>

            

             <div class="form-group row">
              <label for="cliente" class="col-md-2 control-label">Descripción</label >
              <div class="col-md-2">
                <input type="text" class="form-control input-sm input" name="description" id="description" value="Memorandos" readonly>
              </div>
         
            </div>




            <div class="form-group row">

               <input type="hidden" name="idcliente" id="idcliente">
              <label for="cliente" class="col-md-2 control-label">Procedencia del equipo</label >
              <div class="col-md-3">
                <input type="text" class="form-control input-sm input" name="nombrecl" id="nombrecl" readonly>


              </div>
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalP">
                  <span class="glyphicon glyphicon-search"></span>
                </button>
         
            </div>

            <div class="form-group row">
               <label for="cliente" class="col-md-2 control-label">Sintomas del equipo</label >
              <div class="col-md-3">
                <textarea type="textarea" class="form-control input-sm input" name="sintomes" id="sintomes"></textarea>
              </div>
         
            </div>

             



          <div class="pull-right">
                 <main class="mdl-layout__content">
                <button type="submit" class="btn btn-primary" id="enviarlab" name="enviarlab">Agregar</button>
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


          <td style="text-align: center"><a href="#" class="btn btn-primary btn-xs" data-dismiss="modal"  onclick="Tclientee(<?= $cliente->idcliente ?>)"><i class="fa fa-pencil"></i> Agregar </a></td>

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

    




  <script type="text/javascript">
   function comprobar(obj)
{   
    if (obj.checked)
      document.getElementById('fec').readOnly = false;
        
    else
      document.getElementById('fec').readOnly = true;
        
}
  </script>


  <script>
function nav(value) {
if (value != "") { location.href = value; }
}
</script>

