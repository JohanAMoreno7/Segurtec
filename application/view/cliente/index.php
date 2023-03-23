<div class="right_col" role="main">

	<div class="x_panel">
		<div class="x_title">
			<h2>Gestión de clientes</h2>
			
			<div class="row">
				<a href="<?php echo URL ?>cliente/nuevo" data-href="" data-toggle="modal"  class="btn btn-primary pull-right"><i class="fa fa-user-plus" aria-hidden="true" ></i>&nbsp;Nueva registro</a>
			</div>
		
			<div class="clearfix"></div>

			

		</div>
		<div class="x_content">
			


			<br />
			<div class="row table-responsive">
				<table id="listas" class="table table-hover table-condensed table-bordered">
					<thead class="tableH">
						<tr>
                            <th>Nº CUENTA</th>
							<th>CLIENTE</th>
							<th>CIUDAD</th>
							<th>DIRECCIÓN</th>
							<th>TELÉFONO</th>
							<th>NOMBRE DE CONTACTO</th>
						
							<th>OPCIONES</th>
							
						</tr>
					</thead>




					<tbody>

							<tr>
				      <?php foreach ($clienter as $cliente) { ?>


				
							<td><?php echo $cliente->ncuenta ?></td>
							<td><?php echo $cliente->nombre ?></td>
							<td><?php echo $cliente->ciudad?></td>
							<td><?php echo $cliente->direccion?></td>
							<td><?php echo $cliente->telefono?></td>
							<td><?php echo $cliente->nombredec?></td>



                      
					<td style="text-align: center"><a class="btn btn-primary btn-xs" href="#" id="" onclick="editarCliente(<?=$cliente->idcliente ?>)"><i class="fa fa-pencil"></i> Opción</a></td>
					
					
			</tr>
					

					<?php } ?>


						
				    </tbody>

					</table>

				</div>
			</div>
		</div>
	</div>
 



<div class="modal fade" id="modalE" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog ">
		<div class="modal-content">

			<div class="modal-header" >
				<h4 class="modal-title" id="" style="color: white "><i class='glyphicon glyphicon-edit'></i> Modificar cliente</h4>
			</div>

			<div class="modal-body">
				<form name="form1" id="form1" method="POST" action="<?php echo URL ?>cliente/modificarCliente" onsubmit="return valireClient()">
					<div class="row">
						<div class="form-group col-md-12">

							<label>Nº De cuenta</label>

							<input type="text" class="form-control" id="ncuentaC" name="ncuentaC" >


							<label>Cliente</label>

							<input type="text" class="form-control" id="nombreC" name="nombreC" >

							<label>Ciudad</label>

							<input type="text" class="form-control" id="ciudadC" name="ciudadC" >


							<label>Dirección</label>

							<input type="text" class="form-control" id="direccionC" name="direccionC" >


							<label>Teléfono</label>

							<input type="text" class="form-control soloNum" id="telefonoC" name="telefonoC" >
							
							


							<label>Nombre de contacto</label>
							

							<input type="text" class="form-control" id="nombredecC" name="nombredecC" >

							<input type="hidden" name="idcliente" id="idcliente">

						</div>
				

				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<?php if (isset($_SESSION["Administrador"]) == 1) { ?>
					<button type="submit" class="btn btn-warning"  name="deleteeC">
					Borrar</button>
					   <?php } ?>
					<button type="submit" class="btn btn-primary" id="" name="enviarCp">Guardar</button>
				</div>

			</form>	
	    </div>
      </div>
     </div>
	</div>

	<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="" style="color: white "><i class='glyphicon glyphicon-edit'></i>Listado de clientes</h4>
           </div>
           <div class="modal-body">
              <h2>Asegurarse de que la información de los clientes es verídica antes de guardar o hacer una modificación</h2>
                 
       </div>
           <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
           </div>
      </div>
   </div>
</div>

	

	






<?php 
if (isset($_SESSION['clienter'])) {
	echo $_SESSION['clienter'];
	unset($_SESSION['clienter']);
}
if (isset($_SESSION['userMass'])) {
	echo $_SESSION['userMass'];
	unset($_SESSION['userMass']);
}




?> 


