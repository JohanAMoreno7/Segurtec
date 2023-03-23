
<!-- footer content -->
<footer>
	<div class="pull-right">
		SegurtecV2 &copy; 2018
	</div>
	<div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>


<script>
	var uri = "<?php echo URL; ?>"
</script>

<!-- jQuery -->


<script src="<?=  URL ?>/vendors/calendario/js/jquery.min.js"></script>
<script src="<?=  URL ?>/vendors/calendario/js/moment.min.js"></script>
<script src="<?=  URL ?>/vendors/calendario/js/fullcalendar.min.js"></script>
<script src="<?= URL ?>/vendors/calendario/locale/es.js"></script>

<!-- Bootstrap -->
<script src="<?=  URL ?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?=  URL ?>/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?=  URL ?>/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="<?=  URL ?>/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="<?=  URL ?>/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="<?=  URL ?>/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="<?=  URL ?>/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="<?=  URL ?>/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="<?=  URL ?>/vendors/Flot/jquery.flot.js"></script>
<script src="<?=  URL ?>/vendors/Flot/jquery.flot.pie.js"></script>
<script src="<?=  URL ?>/vendors/Flot/jquery.flot.time.js"></script>
<script src="<?=  URL ?>/vendors/Flot/jquery.flot.stack.js"></script>
<script src="<?=  URL ?>/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="<?=  URL ?>/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="<?=  URL ?>/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="<?=  URL ?>/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="<?=  URL ?>/vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="<?=  URL ?>/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="<?=  URL ?>/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="<?=  URL ?>/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?=  URL ?>/vendors/moment/min/moment.min.js"></script>
<script src="<?=  URL ?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?=  URL ?>/build/js/custom.min.js"></script>
<!-- datatables -->
<script src="<?=  URL ?>js/datatables.min.js"></script>






<script type="text/javascript">
	$(document).ready(function() {
		$('#listas').DataTable({
			"language":espanol
		});
		  
	});

	var espanol = {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Registros del _START_ al _END_ de un total de _TOTAL_ ",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar: ",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
}
</script>


<script type="text/javascript">
  $(document).ready(function() {
    $('#listas2').DataTable({
      "language":espanol
    });
      
  });

  var espanol = {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Registros del _START_ al _END_ de un total de _TOTAL_ ",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar: ",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
}
</script>
<!-- funciones js -->
<script src="<?=  URL ?>js/misFunciones.js"></script>





</body>
</html>



