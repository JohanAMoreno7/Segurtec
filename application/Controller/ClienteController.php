<?php 
namespace Mini\Controller;
use Mini\Model\cliente;


class ClienteController{

	public function __construct()
	{
		session_start();
		if (!isset($_SESSION["Administrador"]) && !isset($_SESSION["Monitoreo"]) && !isset($_SESSION["Electronica"])) {
            header('location: ' . URL . 'login/index');
		} 
	}

	public function index(){
		
		$cliente = new Cliente();
		$clienter = $cliente->ListarClientes();


		include APP.'view/_templates/header.php';
		include APP.'view/cliente/index.php';
		include APP.'view/_templates/footer.php';
	}

	


	public function nuevo(){
		
		

		include APP.'view/_templates/header.php';
		include APP.'view/cliente/nuevo.php';
		include APP.'view/_templates/footer.php';
	}




	public function registraCliente()
	{

		if (isset($_POST["enviarc"])) {
			$cliente = new Cliente();

			$cliente->registraCliente($_POST['nombre'],$_POST['direccion'],$_POST['telefono'],$_POST['nombredec'],$_POST['ciudad'],$_POST['ncuenta']);

		}
		header('location: ' . URL . 'cliente/index');
	}


	public function mostrarClientes()
	{
		$idcliente= $_POST['idcliente'];
		if (isset($idcliente)) {
            
			$cliente = new Cliente();
            
			$cliente = $cliente->mostrarClientes($idcliente);

			echo json_encode($cliente);
		} else {
            // redirect user to songs index page (as we don't have a id)
			echo "Error, no ingreso el id";
		}

	}


		public function modificarCliente()
	{
		if (isset($_POST['enviarCp'])) {
			$cliente = new Cliente();
            $cliente = $cliente->modificarCliente($_POST['idcliente'],$_POST['nombreC'], $_POST['ciudadC'], $_POST['direccionC'], $_POST['telefonoC'], $_POST['nombredecC'], $_POST['ncuentaC']);
		}else if (isset($_POST["deleteeC"])) {
             $idcliente = $_POST["idcliente"];
            $cliente = new Cliente();
            $cliente->borraCliente($idcliente);

    }
		header('location: ' . URL . 'cliente/index');
	}








}



?>