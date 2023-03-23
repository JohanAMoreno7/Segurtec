<?php
namespace Mini\Controller;
use Mini\Model\home;

class HomeController
{

    public function __construct()
    {
        session_start();
        if (!isset($_SESSION["Administrador"]) && !isset($_SESSION["Monitoreo"]) && !isset($_SESSION["Electronica"]) && !isset($_SESSION["Laboratorio"]) && !isset($_SESSION["Director"]) && !isset($_SESSION["Empleado"])) {
            header('location: ' . URL . 'login/index');
        }
    }


    public function cambiar(){
        

        include APP.'view/_templates/header.php';
        include APP.'view/home/cambiar.php';
        include APP.'view/_templates/footer.php';
    }

    public function index()
    {




        require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
    }


    public function cambiarPass()
    {

        if (isset($_POST["enviarcambio"])) {
            $home = new Home();

            $home->cambiarPass($_POST['idperson'],$_POST['pasado']);

        }
        header('location: ' . URL . 'home/index');
    }







    
}
?>
