<?php
namespace Mini\Controller;
use Mini\Model\laboratorio;
use Mini\Model\cliente;


class LaboratorioController
{

	 public function __construct()
    {
        session_start();
        if (!isset($_SESSION["Administrador"]) && !isset($_SESSION["Laboratorio"])) {
            header('location: ' . URL . 'login/index');
        }
    }

     public function index()
    {


            $fecha13 = date("Y-m-d");
            
            
        
        $laboratorio = new Laboratorio();
        $laboratorio = $laboratorio->ListarEquipos($fecha13);

        require APP . 'view/_templates/header.php';
        require APP . 'view/laboratorio/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function nuevo(){

        $cliente = new Cliente();
        $clienter = $cliente->ListarClientes();
        
        

        include APP.'view/_templates/header.php';
        include APP.'view/laboratorio/nuevo.php';
        include APP.'view/_templates/footer.php';
    }

    public function traercliente(){

        $idcliente = $_POST['idcliente'];

        if (isset($idcliente)) {
            $laboratorio = new Laboratorio();
            $laboratorio = $laboratorio->traercliente($idcliente);
            echo json_encode($laboratorio);
        }
    }

    public function registraEquipo()
    {

        if (isset($_POST["enviarlab"])) {
            $laboratorio = new Laboratorio();

            $laboratorio->registraEquipo($_POST['fec'],$_POST['fece'],$_POST['codigo'],$_POST['codigolab'],$_POST['controlab'],$_POST['codigor'],$_POST['description'],$_POST['idcliente'],$_POST['sintomes']);

        }
        header('location: ' . URL . 'laboratorio/index');
    }


    public function editarEquipo()
    {
        
    
        $idequipo= $_POST['idequipo'];  
        if (isset($idequipo)) {
            
            $laboratorio = new Laboratorio();
            
            $laboratorio = $laboratorio->editarEquipo($idequipo);
            

            echo json_encode($laboratorio);
        } else {
            // redirect user to songs index page (as we don't have a id)
            echo "Error, no ingreso el id";
        }

    }

    public function todosec()
    {
        $laboratorio = new Laboratorio();
        $laboratorio = $laboratorio->listarEquips();
        include APP.'view/reportes/todosexcele.php';     
    }

    public function todosec2()
    {
        $laboratorio = new Laboratorio();
        $laboratorio = $laboratorio->listarEquips2();
        include APP.'view/reportes/todosexcele.php';     
    }
    public function todosec3()
    {
        $laboratorio = new Laboratorio();
        $laboratorio = $laboratorio->listarEquips3();
        include APP.'view/reportes/todosexcele.php';     
    }

     public function todosec4()
    {
        $laboratorio = new Laboratorio();
        $laboratorio = $laboratorio->listarEquips4();
        include APP.'view/reportes/todosexcele.php';     
    }

     public function todosec5()
    {
        $laboratorio = new Laboratorio();
        $laboratorio = $laboratorio->listarEquips5();
        include APP.'view/reportes/todosexcele.php';     
    }   

    public function modificarEquipo()
    {
        if (isset($_POST['enviareq'])) {
            $laboratorio = new Laboratorio();
            $laboratorio = $laboratorio->modificarEquipo($_POST['sintomas'],$_POST['estado'], $_POST['solucion'], $_POST['idequipo']);
        }else if (isset($_POST["deletequipo"])) {
             $idequipo = $_POST["idequipo"];
            $laboratorio = new Laboratorio();
            $laboratorio->borraEquipo($idequipo);

    }
        header('location: ' . URL . 'laboratorio/index');
    }


    public function hoy(){
        $fecha13 = $_GET['fechatrr'];
        if (isset($fecha13)) {

            $laboratorior = new Laboratorio();
            $laboratorior = $laboratorior->listarequiposhoy($fecha13);
            
            
            include APP.'view/reportes/hoyexcele.php';   
        }else {
            echo "Error, no ingreso el id";
        }
    }

     public function nuevo2(){

        $cliente = new Cliente();
        $clienter = $cliente->ListarClientes();
        
        

        include APP.'view/_templates/header.php';
        include APP.'view/laboratorio/nuevo2.php';
        include APP.'view/_templates/footer.php';
    }

     public function nuevo3(){

        $cliente = new Cliente();
        $clienter = $cliente->ListarClientes();
        
        

        include APP.'view/_templates/header.php';
        include APP.'view/laboratorio/nuevo3.php';
        include APP.'view/_templates/footer.php';
    }

     public function nuevo4(){

        $cliente = new Cliente();
        $clienter = $cliente->ListarClientes();
        
        

        include APP.'view/_templates/header.php';
        include APP.'view/laboratorio/nuevo4.php';
        include APP.'view/_templates/footer.php';
    }

     public function nuevo5(){

        $cliente = new Cliente();
        $clienter = $cliente->ListarClientes();
        
        

        include APP.'view/_templates/header.php';
        include APP.'view/laboratorio/nuevo5.php';
        include APP.'view/_templates/footer.php';
    }

     public function nuevo6(){

        $cliente = new Cliente();
        $clienter = $cliente->ListarClientes();
        
        

        include APP.'view/_templates/header.php';
        include APP.'view/laboratorio/nuevo6.php';
        include APP.'view/_templates/footer.php';
    }

     public function nuevo7(){

        $cliente = new Cliente();
        $clienter = $cliente->ListarClientes();
        
        

        include APP.'view/_templates/header.php';
        include APP.'view/laboratorio/nuevo7.php';
        include APP.'view/_templates/footer.php';
    }

     public function nuevo8(){

        $cliente = new Cliente();
        $clienter = $cliente->ListarClientes();
        
        

        include APP.'view/_templates/header.php';
        include APP.'view/laboratorio/nuevo8.php';
        include APP.'view/_templates/footer.php';
    }

     public function nuevo9(){

        $cliente = new Cliente();
        $clienter = $cliente->ListarClientes();
        
        

        include APP.'view/_templates/header.php';
        include APP.'view/laboratorio/nuevo9.php';
        include APP.'view/_templates/footer.php';
    }

     public function nuevo10(){

        $cliente = new Cliente();
        $clienter = $cliente->ListarClientes();
        
        

        include APP.'view/_templates/header.php';
        include APP.'view/laboratorio/nuevo10.php';
        include APP.'view/_templates/footer.php';
    }

     public function nuevo11(){

        $cliente = new Cliente();
        $clienter = $cliente->ListarClientes();
        
        

        include APP.'view/_templates/header.php';
        include APP.'view/laboratorio/nuevo11.php';
        include APP.'view/_templates/footer.php';
    }

     public function nuevo12(){

        $cliente = new Cliente();
        $clienter = $cliente->ListarClientes();
        
        

        include APP.'view/_templates/header.php';
        include APP.'view/laboratorio/nuevo12.php';
        include APP.'view/_templates/footer.php';
    }

     public function nuevo13(){

        $cliente = new Cliente();
        $clienter = $cliente->ListarClientes();
        
        

        include APP.'view/_templates/header.php';
        include APP.'view/laboratorio/nuevo13.php';
        include APP.'view/_templates/footer.php';
    }

     public function nuevo14(){

        $cliente = new Cliente();
        $clienter = $cliente->ListarClientes();
        
        

        include APP.'view/_templates/header.php';
        include APP.'view/laboratorio/nuevo14.php';
        include APP.'view/_templates/footer.php';
    }

     public function nuevo15(){

        $cliente = new Cliente();
        $clienter = $cliente->ListarClientes();
        
        

        include APP.'view/_templates/header.php';
        include APP.'view/laboratorio/nuevo15.php';
        include APP.'view/_templates/footer.php';
    }

     public function nuevo16(){

        $cliente = new Cliente();
        $clienter = $cliente->ListarClientes();
        
        

        include APP.'view/_templates/header.php';
        include APP.'view/laboratorio/nuevo16.php';
        include APP.'view/_templates/footer.php';
    }





}