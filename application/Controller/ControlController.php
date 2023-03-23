<?php 
namespace Mini\Controller;
use Mini\Model\control;


class ControlController{ 



	public function __construct()
	{
		session_start();
		if (!isset($_SESSION["Administrador"]) && !isset($_SESSION["Director"]) ) {
            header('location: ' . URL . 'home/index');
		}
	}



	public function index(){
		
		$control = new Control();
		$controle = $control->ListarUsuarios();


	
		include APP.'view/_templates/header.php';
		include APP.'view/usuarios/index.php';
		include APP.'view/_templates/footer.php';
	}

	public function index2(){
		
		$controles = new Control();
		$controles = $controles->ListarUsuarios2();


	
		include APP.'view/_templates/header.php';
		include APP.'view/usuarios/index2.php';
		include APP.'view/_templates/footer.php';
	}


	public function nuevo(){
          
        include APP.'view/_templates/header.php';
		include APP.'view/usuarios/nuevo.php';
		include APP.'view/_templates/footer.php';

	}

	public function nuevo2(){
          
        include APP.'view/_templates/header.php';
		include APP.'view/usuarios/nuevo2.php';
		include APP.'view/_templates/footer.php';

	}


	public function registraUsuario()
	{

		if (isset($_POST["enviaru"])) {
			$control = new Control();

			$control->registraUsuario($_POST['user'],$_POST['email'],$_POST['pasadmin'],$_POST['provincia'],$_POST['pueblo']);

		}
		header('location: ' . URL . 'control/index');
	}

	public function registraUsuario2()
	{

		if (isset($_POST["enviarut"])) {
			$control = new Control();

			$control->registraUsuario2($_POST['user'],$_POST['email'],$_POST['pasadmin'],$_POST['provincia'],$_POST['pueblo'],$_POST['fechanacimiento'],$_POST['nplaca'],$_POST['documento']);

		}
		header('location: ' . URL . 'control/index2');
	}



   	public function mostrarUsuarios()
	{
		$id= $_POST['id'];
		if (isset($id)) {
            
			$control = new Control();
            
			$control = $control->mostrarUsuarios($id);

			echo json_encode($control);
		} else {
            // redirect user to songs index page (as we don't have a id)
			echo "Error, no ingreso el id";
		}

	}

	public function mostrarUsuarios2()
	{
		$id= $_POST['id'];
		if (isset($id)) {
            
			$control = new Control();
            
			$control = $control->mostrarUsuarios2($id);

			echo json_encode($control);
		} else {
            // redirect user to songs index page (as we don't have a id)
			echo "Error, no ingreso el id";
		}

	}

		public function modificarUsuario()
	{
		if (isset($_POST['enviarMp'])) {
			$control = new Control();
            $control = $control->modificarUsuario($_POST['idU'],$_POST['userU'], $_POST['mailU'], $_POST['pasadminu'], $_POST['estado']);
		}else if (isset($_POST["deletee"])) {
             $id = $_POST["idU"];
            $control = new Control();
            $control->borrausuario($id);

    }
		header('location: ' . URL . 'control/index');
	}

	public function modificarUsuario2()
	{
		if (isset($_POST['enviarMpp'])) {
			$control = new Control();
            $control = $control->modificarUsuario2($_POST['idUm'],$_POST['userUm'], $_POST['mailUm'], $_POST['pasadminum'], $_POST['estadom'], $_POST['fechanacimientom'], $_POST['nplacam'], $_POST['documentom']);
		}else if (isset($_POST["deletee"])) {
             $id = $_POST["idUm"];
            $control = new Control();
            $control->borrausuario($id);

    }
		header('location: ' . URL . 'control/index2');
	}

	 public function borrausuario(){
        

         if (isset($_POST["deletee"])) {
             $id = $_POST["idU"];
            $control = new Control();
            $control->borrausuario($id);

    }
    header('location: ' . URL . 'control/index');




}
}


?>