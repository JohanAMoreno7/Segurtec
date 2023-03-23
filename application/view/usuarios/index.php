<div class="right_col" role="main">

	<div class="x_panel">
		<div class="x_title">
			<h2>Gestión de usuarios</h2>
			<div class="row">
				<a href="<?php echo URL ?>control/nuevo" data-href="" data-toggle="modal"  class="btn btn-primary pull-right"><i class="fa fa-user-plus" aria-hidden="true" ></i>&nbsp;Nuevo usuario</a>
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
							<th>USUARIO</th>
							<th>CARGO</th>
							<th>ROL</th>
							<th>ESTADO</th>
							<th>MODIFICAR</th>

						</tr>
					</thead>




					<tbody>


							<tr>
				<?php foreach ($controle as $control) { ?>
					<td><?php if(isset($control->user)) echo htmlspecialchars($control->user, ENT_QUOTES, 'UTF-8'); ?></td>
		
					<td><?php if(isset($control->email)) echo htmlspecialchars($control->email, ENT_QUOTES, 'UTF-8'); ?></td>

					<td><?php if(isset($control->cargo)) echo htmlspecialchars($control->cargo, ENT_QUOTES, 'UTF-8'); ?></td>

					<td><?php if(isset($control->rol)) echo htmlspecialchars($control->rol, ENT_QUOTES, 'UTF-8'); ?></td>

					<td><?php if(isset($control->estado)) echo htmlspecialchars($control->estado, ENT_QUOTES, 'UTF-8'); ?></td>

					<td style="text-align: center"><a class="btn btn-primary btn-xs" href="#" id="" onclick="editarUsuario(<?=$control->id ?>)"><i class="fa fa-pencil"></i> Editar</a></td>
					



			</tr>
			<?php } ?>

						
				    </tbody>

					</table>

				</div>
			</div>
		</div>
	</div>
</div>	 



<div class="modal fade" id="modalCategoriaE" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header" >
				<h4 class="modal-title" id="" style="color: white "><i class='glyphicon glyphicon-edit'></i> Modificar usuario</h4>
			</div>

			<div class="modal-body">
				<form name="form1" id="form1" method="POST" action="<?php echo URL ?>control/modificarUsuario" >
					<div class="row">
						<div class="form-group col-md-12">
							<label>Nombre</label><b class="asterisco"></b>

							<input type="text" class="form-control" id="userU" name="userU" onkeypress="return soloLetras(event)">

							<label>Usuario</label>

							<input type="text" class="form-control" id="mailU" name="mailU" >


							<label>Cargo</label>

							<input type="text" class="form-control" id="cargo" name="cargo" autofocus disabled>


							<label>Estado</label>

							<select id="estado" name="estado" class="form-control">
								<option>0</option>
								<option>1</option>

							</select>
							
							


							<label>Contraseña</label>
							

							<input type="password" class="form-control" id="pasadminu" name="pasadminu" >

							<input type="hidden" name="idU" id="idU">

						</div>
					</div>

				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-warning"  name="deletee">
					Borrar</button>
					<button type="submit" class="btn btn-primary" id="" name="enviarMp">Guardar</button>
				</div>
			</form>
		</div>

	</div>
</div>

<?php 
if (isset($_SESSION['usuarior'])) {
	echo $_SESSION['usuarior'];
	unset($_SESSION['usuarior']);
}

if (isset($_SESSION['userMas'])) {
	echo $_SESSION['userMas'];
	unset($_SESSION['userMas']);
}


?> 