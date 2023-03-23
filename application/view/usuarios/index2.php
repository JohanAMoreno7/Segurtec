<div class="right_col" role="main">

	<div class="x_panel">
		<div class="x_title">
			<h2>Gestión de empleados</h2>
			<div class="row">
				<a href="<?php echo URL ?>control/nuevo2" data-href="" data-toggle="modal"  class="btn btn-primary pull-right"><i class="fa fa-user-plus" aria-hidden="true" ></i>&nbsp;Nuevo registro</a>
			</div>
			<div class="clearfix"></div>

		</div>
		<div class="x_content">


			<br />
			<div class="row table-responsive">
				<table id="listas" class="table table-hover table-condensed table-bordered">
					<thead class="tableH">
						<tr>

							<th>NOMBRE</th>
							<th>NÚMERO DE PLACA</th>
							<th>DOCUMENTO</th>
							<th>CARGO</th>
							<th>FECHA DE NACIMIENTO</th>
							<th>ESTADO</th>
							<th>MODIFICAR</th>

						</tr>
					</thead>




					<tbody>


							<tr>
								<?php foreach ($controles as $control) { ?>
					<td><?php if(isset($control->user)) echo htmlspecialchars($control->user, ENT_QUOTES, 'UTF-8'); ?></td>
		
					<td><?php if(isset($control->nplaca)) echo htmlspecialchars($control->nplaca, ENT_QUOTES, 'UTF-8'); ?></td>

					<td><?php if(isset($control->documento)) echo htmlspecialchars($control->documento, ENT_QUOTES, 'UTF-8'); ?></td>

					<td><?php if(isset($control->cargo)) echo htmlspecialchars($control->cargo, ENT_QUOTES, 'UTF-8'); ?></td>

					<td><?php if(isset($control->fechanacimiento)) echo htmlspecialchars($control->fechanacimiento, ENT_QUOTES, 'UTF-8'); ?></td>

					<td><?php if(isset($control->estado)) echo htmlspecialchars($control->estado, ENT_QUOTES, 'UTF-8'); ?></td>

					<td style="text-align: center"><a class="btn btn-primary btn-xs" href="#" id="" onclick="editarUsuario2(<?=$control->id ?>)"><i class="fa fa-pencil"></i> Editar</a></td>




			</tr>
		<?php } ?>
			

						
				    </tbody>

					</table>

				</div>
			</div>
		</div>
	</div>


	<div class="modal fade" id="modalCategoriaEm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header" >
				<h4 class="modal-title" id="" style="color: white "><i class='glyphicon glyphicon-edit'></i> Modificar empleado</h4>
			</div>

			<div class="modal-body">
				<form name="form1" id="form1" method="POST" action="<?php echo URL ?>control/modificarUsuario2" >
					<div class="row">
						<div class="form-group col-md-12">
							<label>Nombre</label><b class="asterisco"></b>

							<input type="text" class="form-control" id="userUm" name="userUm" onkeypress="return soloLetras(event)">

							<label>Usuario</label>

							<input type="text" class="form-control" id="mailUm" name="mailUm" >


							<label>Cargo</label>

							<input type="text" class="form-control" id="cargom" name="cargom" autofocus disabled>

							<label>Documento</label>

							<input type="text" class="form-control" id="documentom" name="documentom" >

							<label>Número de placa</label>

							<input type="text" class="form-control" id="nplacam" name="nplacam" >


							<label>Estado</label>

							<select id="estadom" name="estadom" class="form-control">
								<option>0</option>
								<option>1</option>

							</select>

							<label>Fecha de nacimiento</label>

							<input type="date" class="form-control" id="fechanacimientom" name="fechanacimientom">

							<label>Contraseña</label>
							

							<input type="password" class="form-control" id="pasadminum" name="pasadminum" >

							<input type="hidden" name="idUm" id="idUm">

						</div>
					</div>

				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<?php if (isset($_SESSION["Administrador"]) == 1) { ?>
					<button type="submit" class="btn btn-warning"  name="deletee">
					Borrar</button>
					 <?php } ?>
					<button type="submit" class="btn btn-primary" id="" name="enviarMpp">Guardar</button>
				</div>
			</form>
		</div>

	</div>
</div>


	<?php 
if (isset($_SESSION['usuarior2'])) {
	echo $_SESSION['usuarior2'];
	unset($_SESSION['usuarior2']);
}


?> 