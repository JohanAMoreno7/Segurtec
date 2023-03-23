
$(document).ready(function(){

 
         $("#mostrarmodal").modal("show");
    

	$('.soloNum').on('input', function () { 
		this.value = this.value.replace(/[^0-9]/g,'');
	});


	$('#enviarNuevoS').click(function(){
		nombre=$('#nombreS').val();
		registrarServicio(nombre);
	});
	
});


function soloLetras(e){
	key = e.keyCode || e.which;
	tecla = String.fromCharCode(key).toLowerCase();
	letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
	especiales = "8-37-39-46";

	tecla_especial = false
	for(var i in especiales){
		if(key == especiales[i]){
			tecla_especial = true;
			break;
		}
	}

	if(letras.indexOf(tecla)==-1 && !tecla_especial){
		return false;
	}
}


		function validarlogin(){
			var emaill = document.getElementById('mail').value;
			var pasadminn = document.getElementById('pasadmin').value;


			if( emaill == null || emaill.length == 0 || /^\s+$/.test(emaill) ) {
				alertify.error("El campo correo electrónico no puede estar vacío");
				return false;
			}if( pasadminn == null || pasadminn.length == 0 || /^\s+$/.test(pasadminn) ) {
				alertify.error("El campo contraseña no puede estar vacío");
				return false;
			}

		}

function soloNumeross(e) {
	var key = window.Event ? e.which : e.keyCode;
	return ((key >= 48 && key <= 57) ||(key==8))
}

function pierdeFoco(e){
	var valor = e.value.replace(/^0*/, '');
	e.value = valor;
}


function validate(){


  var nombreu = document.getElementById('user').value;
  var email = document.getElementById('email').value;
  var cargo = document.getElementById('provincia').value;
  var rol = document.getElementById('pueblo').value;
   clave1 = document.f1.pasadmin.value; 
  



  if(nombreu == null || nombreu.length == 0 || /^\s+$/.test(nombreu)){
    alertify.error("El campo nombre no puede estar vacío");
    return false;
  }else if(nombreu.length < 5){
    alertify.error("El campo nombre no puede tener menos de 5 caracteres");
    return false;
  } if( email == null || email.length == 0 || /^\s+$/.test(email) ) {
    alertify.error("El campo email no puede estar vacío");
    return false;
  }if(cargo == null || cargo.length == 0 || /^\s+$/.test(cargo)) {
    alertify.error("El campo cargo no puede estar vacío");
    return false;
  }if(rol == null || rol.length == 0 || /^\s+$/.test(rol)){
    alertify.error("El campo rol no puede estar vacío");
    return false;
  }
  if(clave1 == null || clave1.length == 0 || /^\s+$/.test(clave1)){
    alertify.error("El campo contraseña no puede estar vacío");
    return false;
  } 
 }


 function valkire(){


  var estadoca = document.getElementById('estadopr').value;

  if(estadoca == 'Solucionado'){
    alertify.error("El caso no  se puede modificar");
    return false;
  }
 }



 function validarclienr(){


  var ncuenta = document.getElementById('ncuenta').value;
  var nombrer = document.getElementById('nombre').value;
  var direccion = document.getElementById('direccion').value;
  var ciudad = document.getElementById('ciudad').value;
  
  


if( ncuenta == null || ncuenta.length == 0 || /^\s+$/.test(ncuenta) ) {
    alertify.error("El el número de cuenta no puede estar vacío");
    return false;
  }
  else if( nombrer == null || nombrer.length == 0 || /^\s+$/.test(nombrer) ) {
    alertify.error("El nombre no puede estar vacío");
    return false;
  } else if( direccion == null || direccion.length == 0 || /^\s+$/.test(direccion) ) {
    alertify.error("Se debe asociar una dirección al cliente");
    return false;
  } else if( ciudad == null || ciudad.length == 0 || /^\s+$/.test(ciudad) ) {
    alertify.error("Se debe asociar una ciudad al cliente");
    return false;
  }
 }


 function valireClient(){


  var ncuentaC = document.getElementById('ncuentaC').value;
  var nombreC = document.getElementById('nombreC').value;
  var ciudadC = document.getElementById('ciudadC').value;
  var direccionC = document.getElementById('direccionC').value;
 
  
  



if( ncuentaC == null || ncuentaC.length == 0 || /^\s+$/.test(ncuentaC) ) {
    alertify.error("El número de cuenta no puede estar vacío");
    return false;
  }if( nombreC == null || nombreC.length == 0 || /^\s+$/.test(nombreC) ) {
    alertify.error("El campo nombre no puede estar vacío");
    return false;
  }if( ciudadC == null || ciudadC.length == 0 || /^\s+$/.test(ciudadC) ) {
    alertify.error("El campo ciudad no puede estar vacío");
    return false;
  }if( direccionC == null || direccionC.length == 0 || /^\s+$/.test(direccionC) ) {
    alertify.error("El campo dirección no puede estar vacío");
    return false;
  }
 }



function editarUsuario(id){
	$.ajax({
		type:"POST",
		data:{'id':id},
		dataType:'json',
		url: uri + "/control/mostrarUsuarios",
	}).done(function(respuesta){

		$("#idU").val(respuesta.id);
		$("#userU").val(respuesta.user);
		$("#mailU").val(respuesta.email);
		$("#cargo").val(respuesta.cargo);
		$("#estado").val(respuesta.estado);
		$("#pasadminu").val(respuesta.pasadmin);
		$("#modalCategoriaE").modal();

	}).fail(function(r){
		alert(r);
	});
}

function editarUsuario2(id){
	$.ajax({
		type:"POST",
		data:{'id':id},
		dataType:'json',
		url: uri + "/control/mostrarUsuarios2",
	}).done(function(respuesta){

		$("#idUm").val(respuesta.id);
		$("#userUm").val(respuesta.user);
		$("#mailUm").val(respuesta.email);
		$("#cargom").val(respuesta.cargo);
		$("#estadom").val(respuesta.estado);
		$("#correom").val(respuesta.correo);
		$("#nplacam").val(respuesta.nplaca);
		$("#documentom").val(respuesta.documento);
		$("#fechanacimientom").val(respuesta.fechanacimiento);
		$("#pasadminum").val(respuesta.pasadmin);
		$("#modalCategoriaEm").modal();

	}).fail(function(r){
		alert(r);
	});
}

function editarPass(id){
	$.ajax({
		type:"POST",
		data:{'id':id},
		dataType:'json',
		url: uri + "/control/mostrarUsuarios",
	}).done(function(respuesta){

		$("#idUp").val(respuesta.id);
		$("#pasadmin").val(respuesta.pasadmin);
		$("#modalpas").modal();

	}).fail(function(r){
		alert(r);
	});
}

function editarCliente(id){
	$.ajax({
		type:"POST",
		data:{'idcliente':id},
		dataType:'json',
		url: uri + "/cliente/mostrarClientes",
	}).done(function(respuesta){

		$("#ncuentaC").val(respuesta.ncuenta);
		$("#idcliente").val(respuesta.idcliente);
		$("#nombreC").val(respuesta.nombre);
		$("#ciudadC").val(respuesta.ciudad);
		$("#direccionC").val(respuesta.direccion);
		$("#telefonoC").val(respuesta.telefono);
		$("#nombredecC").val(respuesta.nombredec);
		$("#modalE").modal();

	}).fail(function(r){
		alert(r);
	});
}



function Tcliente(id){ 
			$.ajax({
				type:"POST",
				data:{'idcliente':id},
				dataType:'json',
				url: uri + "/caso/traercliente",
			}).done(function(respuesta){
				$("#idcliente").val(respuesta.idcliente);
				$("#nombre").val(respuesta.nombre);
				$("#ciudad").val(respuesta.ciudad);
				$("#direccion").val(respuesta.direccion);
				$("#telefono").val(respuesta.telefono);
				$("#ncuenta").val(respuesta.ncuenta);
				$("#nombredec").val(respuesta.nombredec);
		
			});
		}

		function Tclientee(id){ 
			$.ajax({
				type:"POST",
				data:{'idcliente':id},
				dataType:'json',
				url: uri + "/laboratorio/traercliente",
			}).done(function(respuesta){
				$("#idcliente").val(respuesta.idcliente);
				$("#nombrecl").val(respuesta.nombre);
			
		
			});
		}

		function filtrar(id){ 
			$.ajax({
				type:"POST",
				data:{'id':id},
				dataType:'json',
				url: uri + "/caso/ListarSeguimiento",
			}).done(function(respuesta){
				$("#id").val(respuesta.idseguimiento);
				$("#seguimientos").val(respuesta.seguimiento);
				$("#idcaso").val(respuesta.idcaso);
				
		
			});
		}
		


		function Tcaso(id){ 
			$.ajax({
				type:"POST",
				data:{'id':id},
				dataType:'json',
				url: uri + "/caso/mostrarCasos",
			}).done(function(respuesta){
			

				// $.each([respuesta.seguimiento], function( index, value ) {
    //             alert( index + ": " + value );

    //                  });

    			let data = respuesta[0];

				$("#id").val(data.id);
				$("#idcliente").val(data.idcliente);
				$("#ncuentaca").val(data.ncuenta);
				$("#nombreca").val(data.nombre);
				$("#direccionca").val(data.direccion);
				$("#telefonoca").val(data.telefono);
				$("#ciudadca").val(data.ciudad);
				$("#nombredecca").val(data.nombredec);
                $("#fallaca").val(data.falla);
                $("#descripcionca").val(data.descripcion);
                $("#resca").val(data.responsable);
                $("#responsolu").val(data.responsablesolu);
                $("#fechasolu").val(data.fechasolu);
                $("#fecca").val(data.fecha);
                $("#estadopr").val(data.estado);
                $("#estadoca").val(data.estado);
                $("#solucionado").val(data.solucion);
                $("#seguimientot").empty();
                respuesta.forEach(function(e, i){
                	$("#seguimientot").append("<tr><td>"+e.responsablese+"</td><td>"+e.fechas+"</td><td>"+e.horaregistro+"</td><td>"+e.seguimiento+"</td></tr>");
                });

                // $("#idseguimiento").val(data.idseguimiento);
                // $("#seguirme").val(data.seguimiento);

				$("#modalT").modal();

				
		
			});
		}

		function editarEqui(id){ 
			$.ajax({
				type:"POST",
				data:{'idequipo':id},
				dataType:'json',
				url: uri + "/laboratorio/editarEquipo",
			}).done(function(respuesta){
				$("#idequipo").val(respuesta.idequipo);
				$("#descripcion").val(respuesta.descripcion);
				$("#codigoreferencia").val(respuesta.codigoreferencia);
				$("#consecutivolab").val(respuesta.consecutivolab);
				$("#consecutivos").val(respuesta.consecutivos);
				$("#codigosistema").val(respuesta.codigosistema);
				$("#fechaingreso").val(respuesta.fechaingreso);
				$("#fechaentrega").val(respuesta.fechaentrega);
				$("#estado").val(respuesta.estado);
				$("#solucion").val(respuesta.solucion);
				$("#sintomas").val(respuesta.sintomas);


				$("#modalEq").modal();
			
		
			});
		}

	
	
	
		function Tpermiso(id){ 
			$.ajax({
				type:"POST",
				data:{'id':id},
				dataType:'json',
				url: uri + "/tiquetera/mostrarPermisos",
			}).done(function(respuesta){
			

			
				$("#idU").val(respuesta.id);
				$("#userU").val(respuesta.user);
				$("#asuntou").val(respuesta.descripcion);
				$("#estadou").val(respuesta.estado);
        $("#receptor").val(respuesta.correo);
				$("#fechau").val(respuesta.fecha);
        $("#fechauu").val(respuesta.fechapermi);
				$("#idusuario").val(respuesta.idusuario);
				$("#modalPer").modal();

				
		
			});
		}


		



		$( function() {
    $("#id_categoria").change( function() {
        if ($(this).val() === "1") {
            $("#id_input").prop("disabled", true);
        } else {
            $("#id_input").prop("disabled", false);
        }
    });
});


//Ejecutamos la funcion al cargar
$(function() {
  check();
  check2();
  check3();
  check4();
  check5();
  check6();
  check7();
  check8();
  check9();
  check10();
  check11();

//funcion que se ejecuta al cambiar valor del input
  $("#valor").keyup(function() {
    check();
  });

  $("#valor2").keyup(function() {
    check2();
  });

  $("#valor3").keyup(function() {
    check3();
  });

  $("#valor4").keyup(function() {
    check4();
  });

  $("#valor5").keyup(function() {
    check5();
  });

  $("#valor6").keyup(function() {
    check6();
  });

  $("#valor7").keyup(function() {
    check7();
  });

  $("#valor8").keyup(function() {
    check8();
  });

  $("#valor9").keyup(function() {
    check9();
  });

  $("#valor10").keyup(function() {
    check10();
  });

  $("#valor11").keyup(function() {
    check11();
  });
});

//valida el color
function check() {
  var opcion = $("#valor").val();

  if (opcion == 1) {
    $("#bad2").css("background-color", "red");
  } else if (opcion == 0) {
    $("#bad2").css("background-color", "#337ab7");
  } 
}

function check2() {
  var opcion2 = $("#valor2").val();

  if (opcion2 == 1) {
    $("#matr2").css("background-color", "red");
  } else if (opcion2 == 0) {
    $("#matr2").css("background-color", "#337ab7");
  } 
}

function check3() {
  var opcion3 = $("#valor3").val();

  if (opcion3 == 1) {
    $("#acomp2").css("background-color", "red");
  } else if (opcion3 == 0) {
    $("#acomp2").css("background-color", "#337ab7");
  } 
}

function check4() {
  var opcion4 = $("#valor4").val();

  if (opcion4 == 1) {
    $("#educ2").css("background-color", "red");
  } else if (opcion4 == 0) {
    $("#educ2").css("background-color", "#337ab7");
  } 
}

function check5() {
  var opcion5 = $("#valor5").val();

  if (opcion5 == 1) {
    $("#hora2").css("background-color", "red");
  } else if (opcion5 == 0) {
    $("#hora2").css("background-color", "#337ab7");
  } 
}

function check6() {
  var opcion6 = $("#valor6").val();

  if (opcion6 == 1) {
    $("#extra2").css("background-color", "red");
  } else if (opcion6 == 0) {
    $("#extra2").css("background-color", "#337ab7");
  } 
}

function check7() {
  var opcion7 = $("#valor7").val();

  if (opcion7 == 1) {
    $("#jorn2").css("background-color", "red");
  } else if (opcion7 == 0) {
    $("#jorn2").css("background-color", "#337ab7");
  } 
}

function check8() {
  var opcion8 = $("#valor8").val();

  if (opcion8 == 1) {
    $("#salu2").css("background-color", "red");
  } else if (opcion8 == 0) {
    $("#salu2").css("background-color", "#337ab7");
  } 
}

function check9() {
  var opcion9 = $("#valor9").val();

  if (opcion9 == 1) {
    $("#formar2").css("background-color", "red");
  } else if (opcion9 == 0) {
    $("#formar2").css("background-color", "#337ab7");
  } 
}

function check10() {
  var opcion10 = $("#valor10").val();

  if (opcion10 == 1) {
    $("#perso2").css("background-color", "red");
  } else if (opcion10 == 0) {
    $("#perso2").css("background-color", "#337ab7");
  } 
}

function check11() {
  var opcion11 = $("#valor11").val();

  if (opcion11 == 1) {
    $("#grados2").css("background-color", "red");
  } else if (opcion11 == 0) {
    $("#grados2").css("background-color", "#337ab7");
  } 
}


function validarPermisos(){


  var cumple = document.getElementById('valor').value;
  
 
if( cumple >= 1) {
    alertify.error("Ya pediste este permiso");
    return false;
  }
 }

 function validarPermisos2(){


  var cumple2 = document.getElementById('valor2').value;
  
 
if( cumple2 >= 1) {
    alertify.error("Ya pediste este permiso");
    return false;
  }
 }

 function validarPermisos3(){


  var cumple3 = document.getElementById('valor3').value;
  
 
if( cumple3 >= 1) {
    alertify.error("Ya pediste este permiso");
    return false;
  }
 }

 function validarPermisos4(){


  var cumple4 = document.getElementById('valor4').value;
  
 
if( cumple4 >= 1) {
    alertify.error("Ya pediste este permiso");
    return false;
  }
 }

 function validarPermisos5(){


  var cumple5 = document.getElementById('valor5').value;
  
 
if( cumple5 >= 1) {
    alertify.error("Ya pediste este permiso");
    return false;
  }
 }

 function validarPermisos6(){


  var cumple6 = document.getElementById('valor6').value;
  
 
if( cumple6 >= 1) {
    alertify.error("Ya pediste este permiso");
    return false;
  }
 }

 function validarPermisos7(){


  var cumple7 = document.getElementById('valor7').value;
  
 
if( cumple7 >= 1) {
    alertify.error("Ya pediste este permiso");
    return false;
  }
 }

 function validarPermisos8(){


  var cumple8 = document.getElementById('valor8').value;
  
 
if( cumple8 >= 1) {
    alertify.error("Ya pediste este permiso");
    return false;
  }
 }

 function validarPermisos9(){


  var cumple9 = document.getElementById('valor9').value;
  
 
if( cumple9 >= 1) {
    alertify.error("Ya pediste este permiso");
    return false;
  }
 }

 function validarPermisos10(){


  var cumple10 = document.getElementById('valor10').value;
  
 
if( cumple10 >= 1) {
    alertify.error("Ya pediste este permiso");
    return false;
  }
 }

 function validarPermisos11(){


  var cumple11 = document.getElementById('valor11').value;
  
 
if( cumple11 >= 1) {
    alertify.error("Ya pediste este permiso");
    return false;
  }
 }

 function mostrar3(enla) {
  obj = document.getElementById('oculto');
  obj.style.visibility = (obj.style.visibility == 'hidden') ? 'visible' : 'hidden';
  enla.innerHTML = (enla.innerHTML == '-') ? '+' : '-';
   }

   function mostrar4(enla) {
  obj = document.getElementById('oculto2');
  obj.style.visibility = (obj.style.visibility == 'hidden') ? 'visible' : 'hidden';
  enla.innerHTML = (enla.innerHTML == '-') ? '+' : '-';
   }

   function mostrar5(enla) {
  obj = document.getElementById('oculto3');
  obj.style.visibility = (obj.style.visibility == 'hidden') ? 'visible' : 'hidden';
  enla.innerHTML = (enla.innerHTML == '-') ? '+' : '-';
   }

   function mostrar6(enla) {
  obj = document.getElementById('oculto4');
  obj.style.visibility = (obj.style.visibility == 'hidden') ? 'visible' : 'hidden';
  enla.innerHTML = (enla.innerHTML == '-') ? '+' : '-';
   }

   function mostrar7(enla) {
  obj = document.getElementById('oculto5');
  obj.style.visibility = (obj.style.visibility == 'hidden') ? 'visible' : 'hidden';
  enla.innerHTML = (enla.innerHTML == '-') ? '+' : '-';

  obj2 = document.getElementById('oculto6');
  obj2.style.visibility = (obj2.style.visibility == 'hidden') ? 'visible' : 'hidden';
  enla.innerHTML = (enla.innerHTML == '-') ? '+' : '-';

  obj3 = document.getElementById('oculto7');
  obj3.style.visibility = (obj3.style.visibility == 'hidden') ? 'visible' : 'hidden';
  enla.innerHTML = (enla.innerHTML == '-') ? '+' : '-';

  obj4 = document.getElementById('oculto8');
  obj4.style.visibility = (obj4.style.visibility == 'hidden') ? 'visible' : 'hidden';
  enla.innerHTML = (enla.innerHTML == '-') ? '+' : '-';
   }

   function mostrar8(enla) {
  obj = document.getElementById('oculto9');
  obj.style.visibility = (obj.style.visibility == 'hidden') ? 'visible' : 'hidden';
  enla.innerHTML = (enla.innerHTML == '-') ? '+' : '-';
   }

   function mostrar9(enla) {
  obj11 = document.getElementById('oculto11');
  obj11.style.visibility = (obj11.style.visibility == 'hidden') ? 'visible' : 'hidden';
  enla.innerHTML = (enla.innerHTML == '-') ? '+' : '-';
   }

   function mostrar10(enla) {
  obj12 = document.getElementById('oculto12');
  obj12.style.visibility = (obj12.style.visibility == 'hidden') ? 'visible' : 'hidden';
  enla.innerHTML = (enla.innerHTML == '-') ? '+' : '-';
   }

   function mostrar11(enla) {
  obj22 = document.getElementById('oculto13');
  obj22.style.visibility = (obj22.style.visibility == 'hidden') ? 'visible' : 'hidden';
  enla.innerHTML = (enla.innerHTML == '-') ? '+' : '-';
   }

   function mostrar12(enla) {
  obj14 = document.getElementById('oculto14');
  obj14.style.visibility = (obj14.style.visibility == 'hidden') ? 'visible' : 'hidden';
  enla.innerHTML = (enla.innerHTML == '-') ? '+' : '-';
   }

   function mostrar13(enla) {
  obj14 = document.getElementById('oculto15');
  obj14.style.visibility = (obj14.style.visibility == 'hidden') ? 'visible' : 'hidden';
  enla.innerHTML = (enla.innerHTML == '-') ? '+' : '-';
   }


		

