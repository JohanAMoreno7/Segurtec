<?php 
namespace Mini\Controller;
use Mini\Model\Login;


class LoginController{

  public function index(){

    session_start();
    include APP.'view/_templates/headerL.php';
    include APP.'view/login/index.php';
    include APP.'view/_templates/footerL.php';

  }

  public function cerrar()
  {
    if (isset($_POST['cerrar'])) {
      session_start();
      session_destroy(); 
      header ('location: '. URL . 'login/index');
    }
    
  }

  public function validar(){

    if (isset($_POST['submit'])) {
      $Login = new Login();
      $Login = $Login->validar($_POST['mail'],$_POST['pasadmin']);

    }
    
  }

  public function SendMessage(){ 
    session_start();
    if(isset($_POST['enviar'])){
        $cuerpo = '
        <!DOCTYPE html>
        <html>
        <head>
         <title></title>
        </head>
        <body>
        '.$_POST['cuerpo'].'
        </body>
        </html>';

        //para el envío en formato HTML
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        //dirección del remitente
        $headers .= "From: ".$_POST['nombre']." <".$_POST['emisor'].">\r\n";

        //Una Dirección de respuesta, si queremos que sea distinta que la del remitente
        $headers .= "Reply-To: ".$_POST['emisor']."\r\n";

        //Direcciones que recibián copia
        //$headers .= "Cc: ejemplo2@gmail.com\r\n";

        //direcciones que recibirán copia oculta
        //$headers .= "Bcc: ejemplo3@yahoo.com\r\n";
        if(mail($_POST['receptor'],$_POST['asunto'],$cuerpo,$headers)){
        echo "<script>alert('EXITO');</script>";
      }else{
        echo "<script>alert('No se pudo enviar el mail, por favor verifique su configuracion de correo SMTP saliente.');</script>";
      }
    } 
    }    
    

}