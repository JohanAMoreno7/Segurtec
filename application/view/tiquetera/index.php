<div class="right_col" role="main">

	<div class="x_panel">
		<div class="x_title">
			<h2>Tiquetera emocional</h2>
			
			
			<div class="clearfix"></div>

		</div>
		<div class="x_content">


		

			<br>

		
					
			   	 <?php 

            $fecha1 = date("Y-m-d");
            
            ?>

            

			<div class="form-group row">

	
			   <div class="col-md-2">


				<div  id="lube" >
                   <img  src="<?= URL ?>img/cumple.png">
  
              </div>

        <a href="#" data-href="" id="bad2" name="bad2" title="FACILITAR ESPACIOS DE ESPARCIMIENTO PERSONAL, ASÍ MISMO FELICITAR AL PERSONAL QUE CUMPLE AÑOS
"  data-toggle="modal" data-target="#modalProducto"  class="btn btn-primary ">Tarde libre por cumpleaños</a>
			
			</div>


				 <div class="col-md-2">

				 	<div  id="lube" >
             <img  src="<?= URL ?>img/matrimonio2.png" id="matri">
              </div>

              <a href="#" data-href="" id="matr2" name="matr2" title="PERMISO POR MATRIMONIO" style='width:200px; height:36px'   data-toggle="modal" data-target="#modalProducto2" class="btn btn-primary ">Permiso por matrimonio</a>
				 	
			</div>


               <div class="col-md-2">

               	<div  id="lube" >
             <img  src="<?= URL ?>img/acom.png" id="acom">
              </div>

                  <a href="#" data-href="" id="acomp2" name="acomp2" title="ESTIMULAR LOS ESPACIOS EN FAMILIA
            "  data-toggle="modal" data-target="#modalProducto3" class="btn btn-primary ">Acompañamiento a los hijos</a>

 
            </div>


            <div class="col-md-2">
            	


			<div  id="lube" >
             <img  src="<?= URL ?>img/edu.png" id="edu">
              </div>

              <a href="#" data-href="" id="educ2" name="educ2" title="PROPICIAR EL APOYO EDUCATIVO DE LOS PADRES HACIA SUS HIJOS
"  data-toggle="modal" data-target="#modalProducto4" class="btn btn-primary ">Acompañamiento educativo</a>


            	
        </div>

			</div>

			<br>

			<div class="form-group row">
			   
		
			<div class="col-md-2">

				<div  id="lube" >
             <img  src="<?= URL ?>img/hor.png" >
              </div>

              <a href="#" data-href="" style='width:200px; height:32px' id="hora2" name="hora2" title="PERMITIR LA ASISTENCIA A CITAS O DILIGENCIAS PERSONALES
" data-toggle="modal" data-target="#modalProducto5" class="btn btn-primary ">Horario flexible</a>

				

        </div>



<div class="col-md-2">

	<div  id="lube" >
             <img  src="<?= URL ?>img/extra.png" id="ext" >
              </div>

              <a href="#" data-href="" style='width:200px; height:32px' id="extra2" name="extra2" title="INCENTIVAR LA PERMANENCIA EN LA EMPRESA CON BENIFICIOS EXCLUSIVOS
" data-toggle="modal" data-target="#modalProducto6" class="btn btn-primary ">Días extra de vacaciones</a>
	
</div>
			

<div class="col-md-2">

	<div  id="lube" >
             <img  src="<?= URL ?>img/jor.png" id="jor" >
              </div>


              <a href="#" data-href="" style='width:200px; height:32px' id="jorn2" name="jorn2" title="CUMPLIMIENTO DE LEY
    " data-toggle="modal" data-target="#modalProducto7" class="btn btn-primary ">Jornada recreativa</a>
	
    </div>


    <div class="col-md-2">

    		<div  id="lube" >
             <img  src="<?= URL ?>img/salud.png" id="sal" >
              </div>

              <a href="#" data-href="" style='width:200px; height:32px' id="salu2" name="salu2" title="PROMOVER LOS ESTILOS DE VIDA SALUDABLES
" data-toggle="modal" data-target="#modalProducto8" class="btn btn-primary ">Jornada de salud</a>

    	

    </div>

			</div>

			<br>

			<div class="form-group row">
			   
			   <div class="col-md-2">

			   	<div  id="lube" >
             <img  src="<?= URL ?>img/formarte.png" >
              </div>

              <a href="#" data-href="" style='width:200px; height:32px' id="formar2" name="formar2" title="PERMITIR QUE LOS COLABORADORES TENGAN SUS ESTUDIOS TECNOLÓGICOS O PROFESIONALES
" data-toggle="modal" data-target="#modalProducto9" class="btn btn-primary ">Tiempo para formarte</a>

			   	
			   </div>

         <div class="col-md-2">


			<div  id="lube" >
             <img  src="<?= URL ?>img/personales.png" id="pers" >
              </div>

               <a href="#" data-href="" style='width:200px; height:32px' id="perso2" name="perso2" title="FACILITAR LOS TRAMITES PERSONALES
" data-toggle="modal" data-target="#modalProducto10" class="btn btn-primary ">Diligencias personales</a>



         	
</div>





           <div class="col-md-2">

           	<div  id="lube" >
             <img  src="<?= URL ?>img/grados.png" id="gra" >
              </div>

              <a href="#" data-href="" style='width:200px; height:32px' id="grados2" name="grados2" title="PROMOVER LA SUPERACIÓN ACADEMICA
" data-toggle="modal" data-target="#modalProducto11" class="btn btn-primary ">Permiso por grados</a>
           	

         </div>


         </div>

	 
			</div>

			</div>
		</div>


		<div class="modal fade" id="modalProducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header" >
					<h4 class="modal-title" id="" style="color: white "><i class='fa fa-birthday-cake'></i> PERMISO POR CUMPLEAÑOS</h4>
				</div>

				<div class="modal-body">

					<form method="POST" action="<?php echo URL ?>Tiquetera/mensaje" >
                        <center>
						<img  src="<?= URL ?>img/tique.png" >
                        </center>
                        <br>
						<b>Porque valoramos tu trabajo, dedicación y esfuerzo, SEGURTEC LTDA quiere que disfrutes de más calidad de vida, más alegría en tu cumpleaños, más tiempo en familia, más tiempo para celebrar tus logros, más tiempo con tus amigos y con tu pareja. </b>
						<p></p>

						<label>Día para solicitar el permiso: </label>

				<input type="date" name="fechapermi" id="fechapermi">

				<br>
				<br>
            <label>Requisitos: </label>
					<a href="#" onclick="mostrar3(this); return false" />+</a>
<div id="oculto" style="visibility:hidden">
PUEDE TOMARSE EN EL DIA DE CUMPLEAÑOS O DÍA HÁBIL SIGUIENTE - 5 Horas
</div>


					



					 <input type="hidden" name="idus" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['Administrador'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['Empleado'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['Director'];
				} ?>">




             <input type="hidden" name="nplaca" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin4'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl4'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir4'];
				} ?>">

				 <input type="hidden" name="doc" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin5'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl5'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir5'];
				} ?>">

				<input type="hidden" name="valor" id="valor" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin7'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl7'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir7'];
				} ?>">

			

        
     <input type="hidden" class="form-control input-sm input" id="fec" name="fec" value="<?php echo $fecha1 ?>">

				 <input type="hidden" name="fechana" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin6'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl6'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir6'];
				} ?>">
					
			<input type="hidden" name="asunto" value="Tarde libre por cumpleaños" ><br>
		  
			<input type="hidden"  name="nombre" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir'];
				} ?>" >
			<input type="hidden" name="emisor"   value="notificacionessegurtec@gmail.com"><br>
			
			<input type="hidden"  name="receptor" value="hruiz@vise.com.co">
			
		
			<input type="hidden" name="cuerpo" value="Solicito permiso para utilizar mi beneficio para ">

			
          

        
			   <button type="submit" class="btn btn-primary col-md-16" style='width:200px; height:36px' id="bad" name="bad"  onclick="return validarPermisos()" >Tarde libre por cumpleaños</button>
 </form>
			</div>

		</div>
	</div>
</div>

<div class="modal fade" id="modalProducto2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header" >
					<h4 class="modal-title" id="" style="color: white "><i class='fa fa-diamond'></i> PERMISO POR MATRIMONIO</h4>
				</div>

				<div class="modal-body">

					<form method="POST" action="<?php echo URL ?>Tiquetera/mensaje2">

						<center>
						<img  src="<?= URL ?>img/tique.png" >
                        </center>
                        <br>
						<b>Porque valoramos tu trabajo, dedicación y esfuerzo, SEGURTEC LTDA quiere que disfrutes de más calidad de vida, más alegría en tu cumpleaños, más tiempo en familia, más tiempo para celebrar tus logros, más tiempo con tus amigos y con tu pareja. </b>
						<p></p>

						<label>Día para solicitar el permiso: </label>

				<input type="date" name="fechapermi" id="fechapermi">

				<br>
				<br>
				<label>Requisitos: </label>
					<a href="#" onclick="mostrar4(this); return false" />+</a>
<div id="oculto2" style="visibility:hidden">
CERTIFICAR MATRIMONIO-APLICA PARA LA SEMANA PREVIA O POSTERIOR AL MATRIMONIO - 8 Horas
</div>




				 		 <input type="hidden" name="idus" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['Administrador'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['Empleado'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['Director'];
				} ?>">


             <input type="hidden" name="nplaca" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin4'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl4'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir4'];
				} ?>">

				 <input type="hidden" name="doc" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin5'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl5'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir5'];
				} ?>">

				<input type="hidden" name="valor2" id="valor2" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin8'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl8'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir8'];
				} ?>">

			

       
     <input type="hidden" class="form-control input-sm input" id="fec" name="fec" value="<?php echo $fecha1 ?>">

				 <input type="hidden" name="fechana" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin6'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl6'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir6'];
				} ?>">

					
			<input type="hidden" name="asunto" value="Permiso por matrimonio" ><br>
		  
			<input type="hidden"  name="nombre" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir'];
				} ?>" >
			<input type="hidden" name="emisor"   value="notificacionessegurtec@gmail.com"><br>
			
			<input type="hidden"  name="receptor" value="hruiz@vise.com.co">
			
		
			<input type="hidden" name="cuerpo" value="Solicito permiso para utilizar mi beneficio de">

			
			   <button type="submit" class="btn btn-primary col-md-16" style='width:200px; height:36px' id="matr" name="matr" onclick="return validarPermisos2()" >Permiso por matrimonio</button>
			    </form>
			</div>

		</div>
	</div>
</div>

<div class="modal fade" id="modalProducto3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header" >
					<h4 class="modal-title" id="" style="color: white "><i class='fa fa-futbol-o'></i> ACOMPAÑAMIENTO A LOS HIJOS</h4>
				</div>

				<div class="modal-body">

						<form method="POST" action="<?php echo URL ?>Tiquetera/mensaje3">

							<center>
						<img  src="<?= URL ?>img/tique.png" >
                        </center>
                        <br>
						<b>Porque valoramos tu trabajo, dedicación y esfuerzo, SEGURTEC LTDA quiere que disfrutes de más calidad de vida, más alegría en tu cumpleaños, más tiempo en familia, más tiempo para celebrar tus logros, más tiempo con tus amigos y con tu pareja. </b>
						<p></p>

						<label>Día para solicitar el permiso: </label>

				<input type="date" name="fechapermi" id="fechapermi">

				<br>
				<br>

				<label>Requisitos: </label>
					<a href="#" onclick="mostrar5(this); return false" />+</a>
<div id="oculto3" style="visibility:hidden">
CERTIFICAR TENER HIJOS - 5 Horas
</div>


               			 <input type="hidden" name="idus" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['Administrador'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['Empleado'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['Director'];
				} ?>">


             <input type="hidden" name="nplaca" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin4'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl4'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir4'];
				} ?>">

				 <input type="hidden" name="doc" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin5'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl5'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir5'];
				} ?>">

				<input type="hidden" name="valor3" id="valor3" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin9'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl9'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir9'];
				} ?>">

			

       
     <input type="hidden" class="form-control input-sm input" id="fec" name="fec" value="<?php echo $fecha1 ?>">

				 <input type="hidden" name="fechana" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin6'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl6'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir6'];
				} ?>">

					
			<input type="hidden" name="asunto" value="Acompañamiento a los hijos" ><br>
		  
			<input type="hidden"  name="nombre" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir'];
				} ?>" >
			<input type="hidden" name="emisor"   value="notificacionessegurtec@gmail.com"><br>
			
			<input type="hidden"  name="receptor" value="hruiz@vise.com.co">
			
		
			<input type="hidden" name="cuerpo" value="Solicito permiso para utilizar mi beneficio de">

			

            <button type="submit" class="btn btn-primary col-md-16" style='width:200px; height:36px' id="acomp" name="acomp" onclick="return validarPermisos3()" >Acompañamiento a los hijos</button>
         </form>
			</div>

		</div>
	</div>
</div>


<div class="modal fade" id="modalProducto4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header" >
					<h4 class="modal-title" id="" style="color: white "><i class='	fa fa-calendar-check-o'></i> ACOMPAÑAMIENTO EDUCATIVO</h4>
				</div>

				<div class="modal-body">

						<form method="POST" action="<?php echo URL ?>Tiquetera/mensaje4">

							<center>
						<img  src="<?= URL ?>img/tique.png" >
                        </center>
                        <br>
						<b>Porque valoramos tu trabajo, dedicación y esfuerzo, SEGURTEC LTDA quiere que disfrutes de más calidad de vida, más alegría en tu cumpleaños, más tiempo en familia, más tiempo para celebrar tus logros, más tiempo con tus amigos y con tu pareja. </b>
						<p></p>

						<label>Día para solicitar el permiso: </label>

				<input type="date" name="fechapermi" id="fechapermi">

				<br>
				<br>


				<label>Requisitos: </label>
					<a href="#" onclick="mostrar6(this); return false" />+</a>
<div id="oculto4" style="visibility:hidden">
CERTIFICAR TENER HIJOS Y ESTAR EN ENTREGA DE NOTAS - 2 Horas
</div>


            		 <input type="hidden" name="idus" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['Administrador'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['Empleado'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['Director'];
				} ?>">


             <input type="hidden" name="nplaca" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin4'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl4'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir4'];
				} ?>">

				 <input type="hidden" name="doc" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin5'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl5'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir5'];
				} ?>">

				<input type="hidden" name="valor4" id="valor4" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin10'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl10'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir10'];
				} ?>">

			

       
     <input type="hidden" class="form-control input-sm input" id="fec" name="fec" value="<?php echo $fecha1 ?>">

				 <input type="hidden" name="fechana" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin6'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl6'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir6'];
				} ?>">

					
			<input type="hidden" name="asunto" value="Acompañamiento educativo" ><br>
		  
			<input type="hidden"  name="nombre" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir'];
				} ?>" >
			<input type="hidden" name="emisor"   value="notificacionessegurtec@gmail.com"><br>
			
			<input type="hidden"  name="receptor" value="hruiz@vise.com.co">
			
		
			<input type="hidden" name="cuerpo" value="Solicito permiso para utilizar mi beneficio de">


             <button type="submit" class="btn btn-primary col-md-16" style='width:200px; height:36px' id="educ" name="educ" onclick="return validarPermisos4()" >Acompañamiento educativo</button>
</form>
			</div>

		</div>
	</div>
</div>

<div class="modal fade" id="modalProducto5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header" >
					<h4 class="modal-title" id="" style="color: white "><i class='fa fa-clock-o'></i> HORARIO FLEXIBLE</h4>
				</div>

				<div class="modal-body">

						<form method="POST" action="<?php echo URL ?>Tiquetera/mensaje5">

							<center>
						<img  src="<?= URL ?>img/tique.png" >
                        </center>
                        <br>
						<b>Porque valoramos tu trabajo, dedicación y esfuerzo, SEGURTEC LTDA quiere que disfrutes de más calidad de vida, más alegría en tu cumpleaños, más tiempo en familia, más tiempo para celebrar tus logros, más tiempo con tus amigos y con tu pareja. </b>
						<p></p>

						<label>Día para solicitar el permiso: </label>

				<input type="date" name="fechapermi" id="fechapermi">

				<br>
				<br>

				<label>Requisitos: </label>
					<a href="#" onclick="mostrar7(this); return false" />+</a>
<div id="oculto5" style="visibility:hidden">
ACORDAR CON JEFE DIRECTO
</div>
<div id="oculto6" style="visibility:hidden">
OPCION 1. 6AM -4PM 
</div>
<div id="oculto7" style="visibility:hidden">
OPCION 2. 8AM-6PM OPCION 3 6 AM - 2 PM SIN HORA DE ALMUERZO
</div>
<div id="oculto8" style="visibility:hidden">
OPCION 3 6 AM - 2 PM SIN HORA DE ALMUERZO   
</div>




            		 <input type="hidden" name="idus" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['Administrador'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['Empleado'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['Director'];
				} ?>">


             <input type="hidden" name="nplaca" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin4'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl4'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir4'];
				} ?>">

				 <input type="hidden" name="doc" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin5'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl5'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir5'];
				} ?>">

				<input type="hidden" name="valor5" id="valor5" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin11'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl11'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir11'];
				} ?>">

			

       
     <input type="hidden" class="form-control input-sm input" id="fec" name="fec" value="<?php echo $fecha1 ?>">

				 <input type="hidden" name="fechana" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin6'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl6'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir6'];
				} ?>">


					
			<input type="hidden" name="asunto" value="Horario flexible" ><br>
		  
			<input type="hidden"  name="nombre" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir'];
				} ?>" >
			<input type="hidden" name="emisor"   value="notificacionessegurtec@gmail.com"><br>
			
			<input type="hidden"  name="receptor" value="hruiz@vise.com.co">
			
		
			<input type="hidden" name="cuerpo" value="Solicito permiso para utilizar mi beneficio de">

			
			   <button type="submit" class="btn btn-primary col-md-16" style='width:200px; height:36px' id="hora" name="hora" onclick="return validarPermisos5()" >Horario flexible</button>
</form>
			</div>

		</div>
	</div>
</div>

<div class="modal fade" id="modalProducto6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header" >
					<h4 class="modal-title" id="" style="color: white "><i class='fa fa-child'></i> SOLICITAR DÍAS EXTRA DE VACACIONES</h4>
				</div>

				<div class="modal-body">

						<form method="POST" action="<?php echo URL ?>Tiquetera/mensaje6">

							<center>
						<img  src="<?= URL ?>img/tique.png" >
                        </center>
                        <br>
						<b>Porque valoramos tu trabajo, dedicación y esfuerzo, SEGURTEC LTDA quiere que disfrutes de más calidad de vida, más alegría en tu cumpleaños, más tiempo en familia, más tiempo para celebrar tus logros, más tiempo con tus amigos y con tu pareja. </b>
						<p></p>

						<label>Día para solicitar el permiso: </label>

				<input type="date" name="fechapermi" id="fechapermi">

				<br>
				<br>

				<label>Requisitos: </label>
					<a href="#" onclick="mostrar8(this); return false" />+</a>
<div id="oculto9" style="visibility:hidden">
APLICA PARA: PERSONAL QUE LLEVA ENTRE 3 Y 5 AÑOS: 1 DIA 
</div>



		<input type="hidden" name="idus" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['Administrador'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['Empleado'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['Director'];
				} ?>">


             <input type="hidden" name="nplaca" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin4'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl4'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir4'];
				} ?>">

				 <input type="hidden" name="doc" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin5'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl5'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir5'];
				} ?>">

				<input type="hidden" name="valor6" id="valor6" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin12'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl12'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir12'];
				} ?>">

			

       
     <input type="hidden" class="form-control input-sm input" id="fec" name="fec" value="<?php echo $fecha1 ?>">

				 <input type="hidden" name="fechana" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin6'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl6'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir6'];
				} ?>">

					
			<input type="hidden" name="asunto" value="Dias extra de vacaciones" ><br>
		  
			<input type="hidden"  name="nombre" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir'];
				} ?>" >
			<input type="hidden" name="emisor"   value="notificacionessegurtec@gmail.com"><br>
			
			<input type="hidden"  name="receptor" value="hruiz@vise.com.co">
			
		
			<input type="hidden" name="cuerpo" value="Solicito permiso para utilizar mi beneficio de">

			


        <button type="submit" class="btn btn-primary" style='width:200px; height:36px' id="extra" name="extra" onclick="return validarPermisos6()" >Días extra de vacaciones</button>
</form>
			</div>

		</div>
	</div>
</div>


<div class="modal fade" id="modalProducto7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header" >
					<h4 class="modal-title" id="" style="color: white "><i class='fa fa-paper-plane-o'></i> JORNADA RECREATIVA</h4>
				</div>

				<div class="modal-body">

						<form method="POST" action="<?php echo URL ?>Tiquetera/mensaje7">

							<center>
						<img  src="<?= URL ?>img/tique.png" >
                        </center>
                        <br>
						<b>Porque valoramos tu trabajo, dedicación y esfuerzo, SEGURTEC LTDA quiere que disfrutes de más calidad de vida, más alegría en tu cumpleaños, más tiempo en familia, más tiempo para celebrar tus logros, más tiempo con tus amigos y con tu pareja. </b>
						<p></p>

						<label>Día para solicitar el permiso: </label>

				<input type="date" name="fechapermi" id="fechapermi">

				<br>
				<br>

					<label>Requisitos: </label>
					<a href="#" onclick="mostrar9(this); return false" />+</a>
<div id="oculto11" style="visibility:hidden">
COORDINAR CON JEFE DIRECTO - 4 Horas
</div>


		<input type="hidden" name="idus" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['Administrador'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['Empleado'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['Director'];
				} ?>">


             <input type="hidden" name="nplaca" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin4'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl4'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir4'];
				} ?>">

				 <input type="hidden" name="doc" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin5'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl5'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir5'];
				} ?>">

				<input type="hidden" name="valor7" id="valor7" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin13'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl13'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir13'];
				} ?>">

			

       
     <input type="hidden" class="form-control input-sm input" id="fec" name="fec" value="<?php echo $fecha1 ?>">

				 <input type="hidden" name="fechana" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin6'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl6'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir6'];
				} ?>">

					
			<input type="hidden" name="asunto" value="Jornada recreativa" ><br>
		  
			<input type="hidden"  name="nombre" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir'];
				} ?>" >
			<input type="hidden" name="emisor"   value="notificacionessegurtec@gmail.com"><br>
			
			<input type="hidden"  name="receptor" value="hruiz@vise.com.co">
			
		
			<input type="hidden" name="cuerpo" value="Solicito permiso para utilizar mi beneficio de">

			


       <button type="submit" class="btn btn-primary col-md-16" style='width:200px; height:36px'  id="jorn" name="jorn" onclick="return validarPermisos7()" >Jornada recreativa</button>

</form>
			</div>

		</div>
	</div>
</div>


<div class="modal fade" id="modalProducto8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header" >
					<h4 class="modal-title" id="" style="color: white "><i class='fa fa-medkit'></i> JORNADA DE SALUD</h4>
				</div>

				<div class="modal-body">

						<form method="POST" action="<?php echo URL ?>Tiquetera/mensaje8">

							<center>
						<img  src="<?= URL ?>img/tique.png" >
                        </center>
                        <br>
						<b>Porque valoramos tu trabajo, dedicación y esfuerzo, SEGURTEC LTDA quiere que disfrutes de más calidad de vida, más alegría en tu cumpleaños, más tiempo en familia, más tiempo para celebrar tus logros, más tiempo con tus amigos y con tu pareja. </b>
						<p></p>

						<label>Día para solicitar el permiso: </label>

				<input type="date" name="fechapermi" id="fechapermi">

				<br>
				<br>
				<label>Requisitos: </label>
					<a href="#" onclick="mostrar10(this); return false" />+</a>
<div id="oculto12" style="visibility:hidden">
DEBE SER UTILIZADA EN TEMAS DE SALUD O AUTOCUIDADO - 4 Horas
</div>


    		<input type="hidden" name="idus" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['Administrador'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['Empleado'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['Director'];
				} ?>">


             <input type="hidden" name="nplaca" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin4'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl4'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir4'];
				} ?>">

				 <input type="hidden" name="doc" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin5'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl5'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir5'];
				} ?>">

				<input type="hidden" name="valor8" id="valor8" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin14'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl14'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir14'];
				} ?>">

			

       
     <input type="hidden" class="form-control input-sm input" id="fec" name="fec" value="<?php echo $fecha1 ?>">

				 <input type="hidden" name="fechana" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin6'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl6'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir6'];
				} ?>">

					
			<input type="hidden" name="asunto" value="Jornada de salud" ><br>
		  
			<input type="hidden"  name="nombre" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir'];
				} ?>" >
			<input type="hidden" name="emisor"   value="notificacionessegurtec@gmail.com"><br>
			
			<input type="hidden"  name="receptor" value="hruiz@vise.com.co">
			
		
			<input type="hidden" name="cuerpo" value="Solicito permiso para utilizar mi beneficio de">

		
    	<button type="submit" class="btn btn-primary col-md-16" style='width:200px; height:36px'  id="salu" name="salu" onclick="return validarPermisos8()" >Jornada de salud</button>
</form>
			</div>

		</div>
	</div>
</div>

<div class="modal fade" id="modalProducto9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header" >
					<h4 class="modal-title" id="" style="color: white "><i class='glyphicon glyphicon-edit'></i> TIEMPO PARA FORMARTE</h4>
				</div>

				<div class="modal-body">

						<form method="POST" action="<?php echo URL ?>Tiquetera/mensaje9">

							<center>
						<img  src="<?= URL ?>img/tique.png" >
                        </center>
                        <br>
						<b>Porque valoramos tu trabajo, dedicación y esfuerzo, SEGURTEC LTDA quiere que disfrutes de más calidad de vida, más alegría en tu cumpleaños, más tiempo en familia, más tiempo para celebrar tus logros, más tiempo con tus amigos y con tu pareja. </b>
						<p></p>

						<label>Día para solicitar el permiso: </label>

				<input type="date" name="fechapermi" id="fechapermi">

				<br>
				<br>

				<label>Requisitos: </label>
					<a href="#" onclick="mostrar11(this); return false" />+</a>
<div id="oculto13" style="visibility:hidden">
HACER SOLICITUD FORMAL ENTREGANDO HORARIO O RECIBO DE PAGO - 2 Horas semanales
</div>


			   		<input type="hidden" name="idus" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['Administrador'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['Empleado'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['Director'];
				} ?>">


             <input type="hidden" name="nplaca" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin4'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl4'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir4'];
				} ?>">

				 <input type="hidden" name="doc" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin5'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl5'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir5'];
				} ?>">

				<input type="hidden" name="valor9" id="valor9" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin15'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl15'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir15'];
				} ?>">

			

       
     <input type="hidden" class="form-control input-sm input" id="fec" name="fec" value="<?php echo $fecha1 ?>">

				 <input type="hidden" name="fechana" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin6'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl6'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir6'];
				} ?>">

					
			<input type="hidden" name="asunto" value="Tiempo para formarte" ><br>
		  
			<input type="hidden"  name="nombre" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir'];
				} ?>" >
			<input type="hidden" name="emisor"   value="notificacionessegurtec@gmail.com"><br>
			
			<input type="hidden"  name="receptor" value="hruiz@vise.com.co">
			
		
			<input type="hidden" name="cuerpo" value="Solicito permiso para utilizar mi beneficio de">

			

			   	  <button type="submit" class="btn btn-primary col-md-16" style='width:200px; height:36px'  id="formar" name="formar" onclick="return validarPermisos9()" >Tiempo para formarte</button>
			   </form>
			</div>

		</div>
	</div>
</div>


<div class="modal fade" id="modalProducto10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header" >
					<h4 class="modal-title" id="" style="color: white "><i class='fa fa-suitcase'></i> DILIGENCIAS PERSONALES</h4>
				</div>

				<div class="modal-body">

						<form method="POST" action="<?php echo URL ?>Tiquetera/mensaje10">

							<center>
						<img  src="<?= URL ?>img/tique.png" >
                        </center>
                        <br>
						<b>Porque valoramos tu trabajo, dedicación y esfuerzo, SEGURTEC LTDA quiere que disfrutes de más calidad de vida, más alegría en tu cumpleaños, más tiempo en familia, más tiempo para celebrar tus logros, más tiempo con tus amigos y con tu pareja. </b>
						<p></p>

						<label>Día para solicitar el permiso: </label>

				<input type="date" name="fechapermi" id="fechapermi">

				<br>
				<br>

				<label>Requisitos: </label>
					<a href="#" onclick="mostrar13(this); return false" />+</a>
<div id="oculto15" style="visibility:hidden">
COORDINAR CON JEFE DIRECTO - 1 Hora
</div>




			   		<input type="hidden" name="idus" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['Administrador'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['Empleado'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['Director'];
				} ?>">


             <input type="hidden" name="nplaca" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin4'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl4'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir4'];
				} ?>">

				 <input type="hidden" name="doc" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin5'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl5'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir5'];
				} ?>">

				<input type="hidden" name="valor10" id="valor10" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin16'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl16'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir16'];
				} ?>">

			

       
     <input type="hidden" class="form-control input-sm input" id="fec" name="fec" value="<?php echo $fecha1 ?>">

				 <input type="hidden" name="fechana" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin6'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl6'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir6'];
				} ?>">

					
			<input type="hidden" name="asunto" value="Diligencias personales" ><br>
		  
			<input type="hidden"  name="nombre" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir'];
				} ?>" >
			<input type="hidden" name="emisor"   value="notificacionessegurtec@gmail.com"><br>
			
			<input type="hidden"  name="receptor" value="hruiz@vise.com.co">
			
		
			<input type="hidden" name="cuerpo" value="Solicito permiso para utilizar mi beneficio de">

         	<button type="submit" class="btn btn-primary col-md-16" style='width:200px; height:36px'  id="perso" name="perso" onclick="return validarPermisos10()" >Diligencias personales</button>
</form>
			</div>

		</div>
	</div>
</div>


<div class="modal fade" id="modalProducto11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header" >
					<h4 class="modal-title" id="" style="color: white "><i class='fa fa-mortar-board'></i> PERMISO POR GRADOS</h4>
				</div>

				<div class="modal-body">

						<form method="POST" action="<?php echo URL ?>Tiquetera/mensaje11">

							<center>
						<img  src="<?= URL ?>img/tique.png" >
                        </center>
                        <br>
						<b>Porque valoramos tu trabajo, dedicación y esfuerzo, SEGURTEC LTDA quiere que disfrutes de más calidad de vida, más alegría en tu cumpleaños, más tiempo en familia, más tiempo para celebrar tus logros, más tiempo con tus amigos y con tu pareja. </b>
						<p></p>

						<label>Día para solicitar el permiso: </label>

				<input type="date" name="fechapermi" id="fechapermi">

				<br>
				<br>

				<label>Requisitos: </label>
					<a href="#" onclick="mostrar12(this); return false" />+</a>
<div id="oculto14" style="visibility:hidden">
CERTIFICAR GRADOS PROPIOS, CONYUGE O HIJO-APLICA PARA EL DÍA HABIL ANTERIOR, DÍA HABIL POSTERIOR O DIA DE LOS GRADOS - 8 Horas
</div>



           			<input type="hidden" name="idus" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['Administrador'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['Empleado'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['Director'];
				} ?>">


             <input type="hidden" name="nplaca" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin4'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl4'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir4'];
				} ?>">

				 <input type="hidden" name="doc" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin5'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl5'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir5'];
				} ?>">

				<input type="hidden" name="valor11" id="valor11" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin17'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl17'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir17'];
				} ?>">

			

       
     <input type="hidden" class="form-control input-sm input" id="fec" name="fec" value="<?php echo $fecha1 ?>">

				 <input type="hidden" name="fechana" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin6'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl6'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir6'];
				} ?>">

					
			<input type="hidden" name="asunto" value="Permiso por grados" ><br>
		  
			<input type="hidden"  name="nombre" value="<?php if (isset($_SESSION['admin'])) {
				  echo $_SESSION['admin'];
				}else if (isset($_SESSION['empl'])) {
				  echo $_SESSION['empl'];
				}else if (isset($_SESSION['dir'])) {
				  echo $_SESSION['dir'];
				} ?>" >
			<input type="hidden" name="emisor"   value="notificacionessegurtec@gmail.com"><br>
			
			<input type="hidden"  name="receptor" value="hruiz@vise.com.co">
			
		
			<input type="hidden" name="cuerpo" value="Solicito permiso para utilizar mi beneficio de">

			

<button type="submit" class="btn btn-primary col-md-16" style='width:200px; height:36px' id="grados" name="grados" onclick="return validarPermisos11()" >Permiso por grados</button>
</form>
			</div>

		</div>
	</div>
</div>



	


<?php 
if (isset($_SESSION['permisos'])) {
	echo $_SESSION['permisos'];
	unset($_SESSION['permisos']);
}

?> 