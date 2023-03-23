

	<div class="right_col" role="main" >

	<div class="x_panel">
		<div class="x_title">
			<h2>Gestión de equipos</h2>
			
			<div class="row">
				<a href="<?php echo URL ?>laboratorio/nuevo" data-href="" data-toggle="modal"  class="btn btn-primary pull-right"><i class="fa fa-user-plus" aria-hidden="true" ></i>&nbsp;Nueva registro</a>
			</div>
		
			<div class="clearfix"></div>

			<?php 

            $fecha13 = date("Y-m-d");
            
            ?>

            <center>
				<div class="btn-group">
					<button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-sm" type="button" aria-expanded="false"> Imprimir <span class="caret"></span>
					</button>
					<ul role="menu" class="dropdown-menu">
						<li><a href="<?php echo URL ?>laboratorio/hoy?fechatrr=<?php echo $fecha13 ?>" target="_blank">Equipos gestionados hoy</a>
						</li>
						<li><a href="<?php echo URL ?>laboratorio/todosec" target="_blank">Equipos gestionados</a>
						</li>
						<li><a href="<?php echo URL ?>laboratorio/todosec2" target="_blank">Equipos pendientes</a>
						</li>
						<li><a href="<?php echo URL ?>laboratorio/todosec3" target="_blank">Equipos de baja</a>
						</li>
						<li><a href="<?php echo URL ?>laboratorio/todosec5" target="_blank">Equipos enviados</a>
						</li>
						<li><a href="<?php echo URL ?>laboratorio/todosec4" target="_blank">Memorandos</a>
						</li>
						
					</ul>
				</div>

			</center>



              <input type="hidden" class="form-control input-sm input" id="fechart" name="fechart" value="<?php echo $fecha12 ?>" readonly>

			

		</div>
		<div class="x_content">
			


			<br />
			<div class="row table-responsive">
				<table id="listas" class="table table-hover table-condensed table-bordered">
					<thead class="tableH">
						<tr>
                            <th>DESCRIPCIÓN</th>
							<th>CÓDIGO DE REFERENCIA</th>
							<th>CÓDIGO LABORATORIO</th>
							<th>CONSECUTIVO LABORATORIO</th>
							<th>PROCEDENCIA</th>
							<th>DIAS RESTANTES</th>
							<th>ESTADO</th>
							<th>OPCIONES</th>
							
						</tr>
					</thead>




					<tbody>

							<tr>
				      <?php foreach ($laboratorio as $lab) { ?>
					<td><?php if(isset($lab->descripcion)) echo htmlspecialchars($lab->descripcion, ENT_QUOTES, 'UTF-8'); ?></td>
		
					<td><?php if(isset($lab->codigoreferencia)) echo htmlspecialchars($lab->codigoreferencia, ENT_QUOTES, 'UTF-8'); ?></td>

					<td><?php if(isset($lab->consecutivolab)) echo htmlspecialchars($lab->consecutivolab, ENT_QUOTES, 'UTF-8'); ?></td>

					<td><?php if(isset($lab->consecutivos)) echo htmlspecialchars($lab->consecutivos, ENT_QUOTES, 'UTF-8'); ?></td>

					<td><?php if(isset($lab->nombre)) echo htmlspecialchars($lab->nombre, ENT_QUOTES, 'UTF-8'); ?></td>

					<td class="estado"><?php if ($lab->dias == 1) { ?>
								<span class="label label-danger" style=""><?php echo $lab->dias; ?></span></td>
							<?php }else if($lab->dias == 2){ ?>
								<span class="label label-danger" ><?php echo $lab->dias; ?></span>
								<?php }else if($lab->dias == 3){ ?>
								<span class="label label-warning" ><?php echo $lab->dias; ?></span>
								<?php }else if($lab->dias == 4){ ?>
								<span class="label label-success" ><?php echo $lab->dias; ?></span>
								<?php }else if($lab->dias == 5){ ?>
								<span class="label label-success" ><?php echo $lab->dias; ?></span>
							<?php }else if($lab->dias == 0){ ?>
								<span class="label label-danger" ><?php echo $lab->dias; ?></span>
								<?php } ?>

					
					<td class="estado"><?php if ($lab->estado == 'Pendiente') { ?>
								<span class="label label-warning" style=""><?php echo $lab->estado; ?></span></td>
							<?php }else if($lab->estado == 'Gestionado'){ ?>
								<span class="label label-success" ><?php echo $lab->estado; ?></span>
							<?php }else if($lab->estado == 'De baja'){ ?>
								<span class="label label-default" ><?php echo $lab->estado; ?></span>
								<?php }else if($lab->estado == 'Enviados'){ ?>
									<span class="label label-info" ><?php echo $lab->estado; ?></span>
								<?php } ?>

	<td style="text-align: center"><a class="btn btn-primary btn-xs" href="#" id="" onclick="editarEqui(<?=$lab->idequipo ?>)"><i class="fa fa-pencil"></i> Editar</a></td>
					



			</tr>
			<?php } ?>
					

				


						
				    </tbody>

					</table>

				</div>
			</div>
		</div>
	</div>


	<div class="modal fade" id="modalEq" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">

			<div class="modal-header" >
				<h4 class="modal-title" id="" style="color: white "><i class='glyphicon glyphicon-edit'></i> Modificar Equipos</h4>
			</div>

			<div class="modal-body">
				<form name="form1" id="form1" method="POST" action="<?php echo URL ?>laboratorio/modificarEquipo">
					<div class="form-group row">

			<label for="telefono" class="col-md-1 control-label">Descripción </label>
							<div class="col-md-2" autofocus disabled>

								<input type="text" class="form-control input-sm input  soloNum" id="descripcion" name="descripcion" autofocus disabled>




							</div>

							<input type="hidden" name="idequipo" id="idequipo">

							<label for="cliente" class="col-md-2 control-label">Código referencia</label >
							<div class="col-md-2">
								<input type="text" class="form-control input-sm input" name="codigoreferencia" id="codigoreferencia"  autofocus disabled>
							</div>

						 

                        

						

							

							
							<label for="documento" class="col-md-1 control-label">Código laboratorio</label>
							<div class="col-md-2">
								<input type="text" class="form-control input-sm input" id="consecutivolab" name="consecutivolab" disabled="">
							</div>

						 
							
						</div>

						<br>

						 <div class="form-group row">

							<label for="telefono" class="col-md-1 control-label">Consecutivo laboratorio</label>
							<div class="col-md-2" autofocus disabled>
							 <input type="text" class="form-control input-sm input  soloNum" id="consecutivos" name="consecutivos" autofocus disabled>
							</div>

							<label for="telefono" class="col-md-1 control-label">Código del sistema</label>
							<div class="col-md-2">
							 <input type="text" class="form-control input-sm input " id="codigosistema" name="codigosistema" class="" autofocus disabled>
							</div>
						</div>

						 <div class="form-group row">
							<br>

							<label for="cliente" class="col-md-2 control-label">Fecha ingreso</label >
							<div class="col-md-3">
								<input type="text" class="form-control input-sm input" id="fechaingreso" name="fechaingreso" readonly >
							</div>

							 <label for="cliente" class="col-md-1 control-label">Fecha entrega</label >
							<div class="col-md-3">
								<input type="text" class="form-control input-sm input" id="fechaentrega" name="fechaentrega" readonly>
							</div>

							</div>

							<div class="form-group row">

              
							<label for="cliente" class="col-md-2 control-label">Sintomas</label >
							<div class="col-md-3">
								 <textarea type="textarea" class="form-control input-sm input" name="sintomas" id="sintomas"></textarea>
							</div>
							
						</div>
						<br>

						 <div class="form-group row">

						 	<input type="hidden" name="estadopr" id="estadopr">

						<label for="nombredect" class="col-md-1 control-label">Estado</label >
							<div class="col-md-2">
						 <SELECT name="estado" id="estado" class="form-control input-sm input">
						 <OPTION >Pendiente</OPTION>
						 <OPTION >Gestionado</OPTION>
						  <OPTION >De baja</OPTION>
						  <OPTION >Enviados</OPTION>
						 
						 </SELECT>
 

							</div>

						

					</div>

				 

						<div class="form-group row">

              
							<label for="cliente" class="col-md-2 control-label">Solución</label >
							<div class="col-md-3">
								 <textarea type="textarea" class="form-control input-sm input" name="solucion" id="solucion"></textarea>
							</div>
							
						</div>

				<div class="modal-footer">
					
					
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						<?php if (isset($_SESSION["Administrador"]) == 1) { ?>
					<button type="submit" class="btn btn-warning"  name="deletequipo">
					Borrar</button>
					   <?php } ?>
					<button type="submit" class="btn btn-primary" id="" name="enviareq">Guardar</button>			
				</div>
			</form>
		</div>

	</div>
</div>
</div>

 


<?php 
if (isset($_SESSION['equipo'])) {
	echo $_SESSION['equipo'];
	unset($_SESSION['equipo']);
}

if (isset($_SESSION['equipos'])) {
	echo $_SESSION['equipos'];
	unset($_SESSION['equipos']);
}


?> 
