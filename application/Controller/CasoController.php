<?php 
namespace Mini\Controller;
use Mini\Model\caso;
use Mini\Model\cliente;


class CasoController{

	public function __construct()
	{
		session_start();
		if (!isset($_SESSION["Administrador"]) && !isset($_SESSION["Monitoreo"]) && !isset($_SESSION["Electronica"])) {
            header('location: ' . URL . 'login/index');
		}
	}

	public function index(){
	
		
		$caso = new Caso();
		$caso = $caso->ListarCaso();
		

		$cliente = new Cliente();
		$clienter = $cliente->ListarClientes();

	 
	    // $id= 1;
     //   $casos = new Caso();
	    // $casos = $casos->ListarSeguimiento($id);

  
		

		include APP.'view/_templates/header.php';
		include APP.'view/caso/index.php';
		include APP.'view/_templates/footer.php';


	}

	public function index2(){
	
		
		$casof = new Caso();
		$casof = $casof->ListarCasoen();
		

		$cliente = new Cliente();
		$clienter = $cliente->ListarClientes();
  
		

		include APP.'view/_templates/header.php';
		include APP.'view/caso/index2.php';
		include APP.'view/_templates/footer.php';


	}

	public function index3(){
	
		
		$casome = new Caso();
		$casome = $casome->ListarCasoenm();
		

		$cliente = new Cliente();
		$clienter = $cliente->ListarClientes();
  
		

		include APP.'view/_templates/header.php';
		include APP.'view/caso/index3.php';
		include APP.'view/_templates/footer.php';


	}



	public function nuevo(){
		
		$cliente = new Cliente();
		$clienter = $cliente->ListarClientes();

		$caso = new Caso();
		$caso = $caso->ListarCaso();

	

		include APP.'view/_templates/header.php';
		include APP.'view/caso/nuevo.php';
		include APP.'view/_templates/footer.php';
	}

	public function fecha(){

        include APP.'view/_templates/header.php';
        include APP.'view/caso/fecha.php';
        include APP.'view/_templates/footer.php';
    }

	public function editar(){
		
		$cliente = new Cliente();
		$clienter = $cliente->ListarClientes();

		$caso = new Caso();
		$caso = $caso->ListarCaso();



		include APP.'view/_templates/header.php';
		include APP.'view/caso/editar.php';
		include APP.'view/_templates/footer.php';
	}

	 public function ConsultaFecha()
    {
           
        if (isset($_POST['enviarf'])) {

             $casoh = new Caso();
        $casoh = $casoh->ConsultaFecha($_POST['feinicial'],$_POST['fefinal']);
        include APP.'view/reportes/todosexcel.php';    

        }else {
            echo "Error, no ingreso el id";
        }
    }

	public function traercliente(){

		$idcliente = $_POST['idcliente'];

		if (isset($idcliente)) {
			$caso = new Caso();
			$caso = $caso->traercliente($idcliente);
			echo json_encode($caso);

		}
	}

	public function registraCaso()
	{

		if (isset($_POST["enviarca"])) {
			$caso = new Caso();

			$caso->registraCaso($_POST['idcliente'],$_POST['fec'],$_POST['res'],$_POST['falla'],$_POST['descripcion']);

		}
		header('location: ' . URL . 'caso/index');
	}

	public function mostrarCasos()
	{
		
	
        	$id= $_POST['id'];	
		if (isset($id)) {
            
			$caso = new Caso();
            
			$caso = $caso->mostrarCasos($id);
			

			echo json_encode($caso);
		} else {
            // redirect user to songs index page (as we don't have a id)
			echo "Error, no ingreso el id";
		}

	}


	// public function mostrarSeguimientov()
	// {
	// 	if (isset($_POST["enviarsegui"])) {
            
	// 		$casos = new Caso();
	// 	 $casos = $casos->ListarSeguimiento($_POST['id']);

	// 		// $caso = new Caso();

	// 		// $caso = $caso->ListarSeguimiento($id);
			

	// 		echo json_encode($casos);
	// 	}

	// }


	


	public function mostrarSeguimientos()
	{
		$id= $_POST['id'];
		if (isset($id)) {
            
			
		$casos = new Caso();
		$casos = $casos->ListarSeguimiento($id);

			echo json_encode($casos);
		} else {
            // redirect user to songs index page (as we don't have a id)
			echo "Error, no ingreso el id";
		}

	}

	public function todosPDF()
	{
		$casoh = new Caso();
		$casoh = $casoh->listarCasoss();
		include APP.'view/reportes/todosexcel.php';		
	}

	public function todosMora()
	{
		$casomo = new Caso();
		$casomo = $casomo->listarCasossm();
		include APP.'view/reportes/casomora.php';		
	}



	public function modificarCaso()
	{
		if (isset($_POST['enviarCa'])) {
			$caso = new Caso();

            
	    if (empty($_POST['seguimiento'])) {
		header('location: ' . URL . 'caso/index');
	    }else
	    
			$caso->agregarS($_POST['seguimiento'],$_POST['respo'],$_POST['fechatelem'],$_POST['horaactual'],$_POST['id']);

            $caso->modificarCaso($_POST['estadoca'], $_POST['solucionado'],$_POST['id'],$_POST['responsolu'],$_POST['feshas']);
            
		}
		header('location: ' . URL . 'caso/index');
	}

	public function hoypdf(){
		$fecha12 = $_GET['fechatr'];
		if (isset($fecha12)) {

			$casoter = new Caso();
			$casoter = $casoter->listarCasoshoy($fecha12);
			
			
			include APP.'view/reportes/hoyexcel.php';	
		}else {
			echo "Error, no ingreso el id";
		}
	}




	



}