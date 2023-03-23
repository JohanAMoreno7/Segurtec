<div class="right_col" role="main">

	<div class="x_panel">
		<div class="x_title">
			<h2>Gestión de permisos</h2>
			<div class="row">

				
			
				<a href="<?php echo URL ?>tiquetera/index" data-href="" data-toggle="modal"  class="btn btn-primary pull-right"><i class="fa fa-user-plus" aria-hidden="true" ></i>&nbsp;Permisos</a>
			</div>
			
			<div class="clearfix"></div>

		</div>
		<div class="x_content">

			<?php if (isset($_SESSION["Administrador"]) == 1) { ?>

			<form name="form1" id="form1" method="POST" action="<?php echo URL ?>tiquetera/restablecer" >
          <button type="submit" class="btn btn-warning col-md-16"  id="rest" name="rest" title="Restablecer permisos"><i class="fa fa-repeat"></i></button>
				</form>

				     <?php } ?>


			  <center>
				<div class="btn-group">
					<button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-sm" type="button" aria-expanded="false"> Imprimir <span class="caret"></span>
					</button>
					<ul role="menu" class="dropdown-menu">
						<li><a href="<?php echo URL ?>tiquetera/todospermisos" target="_blank">Permisos aprobados</a>
						</li>
						<li><a href="<?php echo URL ?>tiquetera/todospermisos2" target="_blank">Permisos denegados</a>
						</li>
						<li><a href="<?php echo URL ?>tiquetera/todospermisos3" target="_blank">Permisos pendientes</a>
						</li>
						
						
					</ul>
				</div>

			</center>

			
			<div class="row table-responsive">
				<table id="listas" class="table table-hover table-condensed table-bordered">
					<thead class="tableH">
						<tr>
							<th>ID PERMISO</th>
							<th>EMPLEADO</th>
							<th>TIPO DE PERMISO</th>
							<th>FECHA DE LA SOLICITUD</th>
							<th>FECHA PARA EL PERMISO</th>
							<th>ESTADO</th>
							<th>OPCIÓN </th>

						
						</tr>
					</thead>



					<tbody>
														 <tr>
						<?php foreach($tiquetera as $p) { ?>
							<th><?php echo $p->id ?></th>
							<td><?php echo $p->user ?></td>
							<td><?php echo $p->descripcion ?></td>
							<td><?php echo $p->fecha?></td>
							<td><?php echo $p->fechapermi?></td>
							

							<td class="estado"><?php if ($p->estado == 'Pendiente') { ?>
								<span class="label label-warning" style=""><?php echo $p->estado; ?></span></td>
								<?php }else if($p->estado == 'Denegado'){ ?>
								<span class="label label-danger" ><?php echo $p->estado; ?></span>
								<?php }else if ($p->estado == 'Aprobado'){ ?>
																<span class="label label-success" ><?php echo $p->estado; ?></span>
								<?php } ?>

								
					<td style="text-align: center"><a class="btn btn-primary btn-xs" href="#" id="" onclick="Tpermiso(<?=$p->id ?>)"><i class="fa fa-pencil"></i> Opción</a></td>
					
									</tr>
											 
						<?php } ?>

				 

						
						</tbody>

					</table>

				</div>
			</div>
		</div>
	</div>


	<div class="modal fade" id="modalPer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header" >
				<h4 class="modal-title" id="" style="color: white "><i class='glyphicon glyphicon-edit'></i> Gestión de permiso</h4>
			</div>

			<div class="modal-body">
				<form name="form1" id="form1" method="POST" action="<?php echo URL ?>tiquetera/modificarpermiso" >
					<div class="row">
						<div class="form-group col-md-12">
							<label>Empleado</label><b class="asterisco"></b>

							<input type="text" class="form-control" id="userU" name="userU" onkeypress="return soloLetras(event)" autofocus disabled>

                                <label>Correo electrónico</label>

						 <input type="text" class="form-control" id="receptor" name="receptor" readonly  >

							<label>Tipo de permiso</label>

							<input type="text" class="form-control" id="asuntou" name="asuntou"  readonly>


							<label>Fecha de la solicitud</label>

							<input type="text" class="form-control" id="fechau" name="fechau" autofocus disabled>

							<label>Fecha del permiso</label>

							<input type="text" class="form-control" id="fechauu" name="fechauu" autofocus disabled>




							<label>Estado</label>

							<SELECT name="estadou" id="estadou" class="form-control input-sm input">
						 <OPTION >Pendiente</OPTION>
						 <OPTION >Denegado</OPTION>
						  <OPTION >Aprobado</OPTION>
						 
						 </SELECT>

						 <input type="hidden" name="emisor" id="emisor"   value="notificacionessegurtec@gmail.com">
							

							<input type="hidden" name="idU" id="idU">
							<input type="hidden" name="idusuario" id="idusuario">
                         
                        <label>Asunto del permiso</label>


                        <textarea class="form-control" id="resultado" name="resultado"></textarea>

                      


						</div>
					</div>

				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary" id="" name="enviarperm">Guardar</button>
				</div>
			</form>
		</div>

	</div>
</div>


<?php 
if (isset($_SESSION['permi'])) {
	echo $_SESSION['permi'];
	unset($_SESSION['permi']);
}

if (isset($_SESSION['restablecer'])) {
	echo $_SESSION['restablecer'];
	unset($_SESSION['restablecer']);
}

?> 