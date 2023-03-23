<div class="right_col" id="yo" role="main" style="min-height: 200px;">

	<div class="x_panel">
		<div class="x_title">
			<h2>Gestión de casos</h2>
			<div class="row">
			
				<a href="<?php echo URL ?>caso/nuevo" data-href="" data-toggle="modal"  class="btn btn-primary pull-right"><i class="fa fa-user-plus" aria-hidden="true" ></i>&nbsp;Nuevo caso</a>
			</div>
			
			<div class="clearfix"></div>

		</div>
		<div class="x_content">
			<br>

		<FORM name=combos>
<select onChange=nav(this.value) name=combo1 class=menudespl width="200">
<OPTION selected>Selecciona</OPTION>
<OPTION value="<?php echo URL ?>caso/index">Todos</OPTION>
<OPTION value="<?php echo URL ?>caso/index2">En proceso</OPTION>
<OPTION value="<?php echo URL ?>caso/index3">En mora</OPTION>
</select>
</FORM>




			<center>
				<div class="btn-group">
					<button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-sm" type="button" aria-expanded="false"> Imprimir <span class="caret"></span>
					</button>
					<ul role="menu" class="dropdown-menu">
						<li><a href="<?php echo URL ?>caso/todosPDF" target="_blank">Casos en proceso</a>
						</li>
						<?php 

            $fecha12 = date("Y-m-d");
            
            ?>
						<li><a href="<?php echo URL ?>caso/hoypdf?fechatr=<?php echo $fecha12 ?>" target="_blank">Casos realizados hoy</a>
						</li>
						<li><a href="<?php echo URL ?>caso/todosMora" target="_blank">Casos en mora</a>
						</li>
						<li><a href="<?php echo URL ?>caso/fecha" target="_blank">Buscar por fecha</a>
						</li>

					</ul>
				</div>

			</center>

		


			<br />
			<div class="row table-responsive">
				<table id="listas" class="table table-hover table-condensed table-bordered">
					<thead class="tableH">
						<tr>
							<th>ID</th>
														<th>Nº CUENTA</th>
							<th>CLIENTE</th>
							<th>NOMBRE DE CONTACTO</th>
							<th>TIPO DE FALLA</th>
							<th>FECHA </th>
							<th>ESTADO</th>


						 
						<th>OPCIONES</th>
						
						</tr>
					</thead>



					<tbody>
														 <tr>
						<?php foreach($caso as $p) { ?>
							<th><?php echo $p->id ?></th>
							<td><?php echo $p->ncuenta ?></td>
							<td><?php echo $p->nombre ?></td>
							<td><?php echo $p->nombredec?></td>
							<td><?php echo $p->falla?></td>
							<td><?php echo $p->fecha?></td>
							

							<td class="estado"><?php if ($p->estado == 'En proceso') { ?>
								<span class="label label-warning" style=""><?php echo $p->estado; ?></span></td>
								<?php }else if($p->estado == 'En Mora'){ ?>
								<span class="label label-danger" ><?php echo $p->estado; ?></span>
								<?php }else if ($p->estado == 'Solucionado'){ ?>
																<span class="label label-success" ><?php echo $p->estado; ?></span>
								<?php } ?>

								
					<td style="text-align: center"><a class="btn btn-primary btn-xs" href="#" id="" onclick="Tcaso(<?=$p->id ?>)"><i class="fa fa-pencil"></i> Opción</a></td>
					
									</tr>
											 
						<?php } ?>

				 

						
						</tbody>

					</table>

				</div>
			</div>
		</div>
	</div>





<div class="modal fade" id="modalT" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">

			<div class="modal-header" >
				<h4 class="modal-title" id="" style="color: white "><i class='glyphicon glyphicon-edit'></i> Modificar caso</h4>
			</div>

			<div class="modal-body">
				<form name="form1" id="form1" method="POST" action="<?php echo URL ?>caso/modificarCaso" onsubmit="return valkire()">
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
								<input type="text" class="form-control input-sm input" id="direccionca" name="direccionca" disabled="">
							</div>

						 
							
						</div>

						

						<input type="hidden" name="id" id="id">

						<input type="hidden" name="idcliente" id="idcliente">

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
                            date_default_timezone_set('America/Bogota');
 
                             ?>

							<?php 

						    $fecha1 = date("Y-m-d");
						    $hora1 = date("G:i");

                            ?>

                            <input type="hidden" class="form-control input-sm input" id="respo" name="respo" value="<?php if (isset($_SESSION['admin'])) {
                  echo $_SESSION['admin'];
                }else if (isset($_SESSION['elect'])) {
                  echo $_SESSION['elect'];
                } ?>" readonly >
						
								<input type="hidden" class="form-control input-sm input" id="fechatelem" name="fechatelem" value="<?php echo $fecha1 ?>" readonly>


								<input type="hidden" class="form-control input-sm input" id="horaactual" name="horaactual" value="<?php echo $hora1 ?>" readonly>
							



							<label for="cliente" class="col-md-2 control-label">Responsable</label >
							<div class="col-md-3">
								<input type="text" class="form-control input-sm input" id="resca" name="resca" readonly >
							</div>

							 <label for="cliente" class="col-md-1 control-label">Fecha</label >
							<div class="col-md-3">
								<input type="text" class="form-control input-sm input" id="fecca" name="fecca" readonly>
							</div>

							</div>

						<br>
							<br>
						<div class="form-group row">
							 
							<label for="nombredect" class="col-md-1 control-label">Falla</label >
							<div class="col-md-4">
						 <input type="text" class="form-control input-sm input" name="fallaca" id="fallaca" autofocus disabled>

							</div>

						</div>


						 <div class="form-group row">
						 <label for="cliente" class="col-md-2 control-label">Descripción</label >
							<div class="col-md-3">
								<textarea type="textarea" class="form-control input-sm input" name="descripcionca" id="descripcionca" autofocus disabled></textarea>
							</div>
					</div>

					 <div class="form-group row">

					 	<table class="table" >
					 		<thead>
                                <tr>
									<th>RESPONSABLE DEL SEGUIMIENTO</th>
									<th>FECHA DEL SEGUIMIENTO</th>
									<th>HORA DEL SEGUIMIENTO</th>
										<th>SEGUIMIENTO</th>
									
                                </tr>
                            </thead>

                            <tbody id="seguimientot"></tbody>
					 	
					 	</table>

						</div>





						 <br>
						 <div class="form-group row">

						 	<input type="hidden" name="estadopr" id="estadopr">

						<label for="nombredect" class="col-md-1 control-label">Estado</label >
							<div class="col-md-2">
						 <SELECT name="estadoca" id="estadoca" class="form-control input-sm input" onchange="if(this.value=='Solucionado') {

							document.getElementById('solucionado').disabled = false;
						 document.getElementById('seguimiento').disabled = true;} else {document.getElementById('solucionado').disabled = true;
						 document.getElementById('seguimiento').disabled = false} ">
						 <OPTION value="En proceso" selected>En proceso</OPTION>
						 <OPTION value="En Mora">En Mora</OPTION>
						 <OPTION value="Solucionado">Solucionado</OPTION>
						 
						 </SELECT>
 

							</div>

						

					</div>

				 

						<div class="form-group row">

							<label for="cliente" class="col-md-2 control-label">Seguimiento</label >
							<div class="col-md-3">
								<textarea type="textarea" class="form-control input-sm input" name="seguimiento" id="seguimiento" required ></textarea>
							</div>

              
							<label for="cliente" class="col-md-2 control-label">Solucionado</label >
							<div class="col-md-3">
								 <textarea type="textarea" class="form-control input-sm input" name="solucionado" id="solucionado" required disabled></textarea>
								 <br>
								 <input type="text" class="sinborde" id="responsolu" name="responsolu" readonly>
								 <input type="text" class="sinborde" id="fechasolu" name="fechasolu" readonly>

							</div>

							<input type="hidden" class="form-control input-sm input" id="feshas" name="feshas" value="<?php echo $fecha12 ?>">

							<input type="hidden" class="form-control input-sm input" id="responsolu" name="responsolu" value="<?php if (isset($_SESSION['admin'])) {
                  echo $_SESSION['admin'];
                }else if (isset($_SESSION['vende'])) {
                  echo $_SESSION['vende'];
                }else if (isset($_SESSION['elect'])) {
                  echo $_SESSION['elect'];
                } ?>"  >

					

							
							
							

							
						</div>

				<div class="modal-footer">
					
				
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary" id="" name="enviarCa">Guardar</button>
				

		 
			
					
				</div>
			</form>
		</div>

	</div>
</div>
</div>
</div>


<?php 
if (isset($_SESSION['caso'])) {
	echo $_SESSION['caso'];
	unset($_SESSION['caso']);
}

if (isset($_SESSION['casos'])) {
	echo $_SESSION['casos'];
	unset($_SESSION['casos']);
}





?> 

<script>
function nav(value) {
if (value != "") { location.href = value; }
}
</script>

<style type="text/css">
	.sinborde {
    border: 0;
  }
</style>


