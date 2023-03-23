<?php
namespace Mini\Controller;
use Mini\Model\tiquetera;

class TiqueteraController
{

    public function __construct()
    {
        session_start();
        if (!isset($_SESSION["Administrador"]) && !isset($_SESSION["Director"]) && !isset($_SESSION["Empleado"])) {
            header('location: ' . URL . 'login/index');
        }
    }

     public function index()
    {




        require APP . 'view/_templates/header.php';
        require APP . 'view/tiquetera/index.php';
        require APP . 'view/_templates/footer.php';
    }


     public function index2()
    {


       $tiquetera = new tiquetera();
        $tiquetera = $tiquetera->ListarPermisos();

        require APP . 'view/_templates/header.php';
        require APP . 'view/tiquetera/index2.php';
        require APP . 'view/_templates/footer.php';
    }

    public function mostrarPermisos()
    {
        
    
            $id= $_POST['id'];  
        if (isset($id)) {
            
            $tiquetera = new tiquetera();
            
            $tiquetera = $tiquetera->mostrarPermiso($id);
            


            echo json_encode($tiquetera);
        } else {
            // redirect user to songs index page (as we don't have a id)
            echo "Error, no ingreso el id";
        }

    }

    public function modificarpermiso()
    {
        if (isset($_POST['enviarperm'])) {

            $tiquetera = new tiquetera();
            $tiquetera = $tiquetera->modificarpermiso($_POST['estadou'],$_POST['idU']);

             $cuerpo = '
        <!DOCTYPE html>
        <html>
        <head>
         <title></title>
        </head>
        <body>
        '.$_POST['resultado'].' 

           <br>
           <br>
            <b>Su permiso quedo: </b> '.$_POST['estadou'].'
             <br>
        </body>
        </html>';

        //para el envío en formato HTML
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        //dirección del remitente
        $headers .= "From: <".$_POST['emisor'].">\r\n";

        //Una Dirección de respuesta, si queremos que sea distinta que la del remitente
        $headers .= "Reply-To: ".$_POST['emisor']."\r\n";

        //Direcciones que recibián copia
        //$headers .= "Cc: ejemplo2@gmail.com\r\n";

        //direcciones que recibirán copia oculta
        //$headers .= "Bcc: ejemplo3@yahoo.com\r\n";
        if(mail($_POST['receptor'],$_POST['asuntou'],$cuerpo,$headers)){
        echo "<script>alert('EXITO');</script>";
      }else{
        echo "<script>alert('No se pudo enviar el mail, por favor verifique su configuracion de correo SMTP saliente.');</script>";
      }
        }
        header('location: ' . URL . 'tiquetera/index2');
    }

    public function restablecer()
    {
        if (isset($_POST['rest'])) {
            $tiquetera = new tiquetera();
            $tiquetera = $tiquetera->restablecer();
        }
        header('location: ' . URL . 'tiquetera/index2');
    }

    public function todospermisos()
    {
        $tiquetera = new tiquetera();
        $tiquetera = $tiquetera->listarPermi();
        include APP.'view/reportes/todosexcelp.php';     
    }

    public function todospermisos2()
    {
        $tiquetera = new tiquetera();
        $tiquetera = $tiquetera->listarPermi2();
        include APP.'view/reportes/todosexcelp.php';     
    }

    public function todospermisos3()
    {
        $tiquetera = new tiquetera();
        $tiquetera = $tiquetera->listarPermi3();
        include APP.'view/reportes/todosexcelp.php';     
    }
        
    


    public function mensaje(){

        if(isset($_POST['bad'])){

            $tiquetera = new tiquetera();

            $tiquetera->registrapermiso($_POST['idus'],$_POST['asunto'],$_POST['fec'],$_POST['fechapermi']);

            $tiquetera = new tiquetera();

            $tiquetera->registrarpermiso($_POST['idus']);

        $cuerpo = '
        <!DOCTYPE html>
        <html>
        <head>
         <title></title>
        </head>
        <body>
        '.$_POST['cuerpo'].'  '.$_POST['asunto'].'  <b> en la fecha: </b> '.$_POST['fechapermi'].'

           <br>
           <br>
            <b>Empleado: </b> '.$_POST['nombre'].'
             <br>
           <b>Número de placa: </b> '.$_POST['nplaca'].'
           <br>
        <b>Documento: </b> '.$_POST['doc'].'
        <br>
        <b>Fecha de nacimiento: </b> '.$_POST['fechana'].'
        </body>
        </html>';

        //para el envío en formato HTML
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        //dirección del remitente
        $headers .= "From: <".$_POST['emisor'].">\r\n";

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
     session_start();
      session_destroy(); 
      header ('location: '. URL . 'login/index');

    }

     public function mensaje2(){

        if(isset($_POST['matr'])){

             $tiquetera = new tiquetera();

            $tiquetera->registrapermiso($_POST['idus'],$_POST['asunto'],$_POST['fec'],$_POST['fechapermi']);

            $tiquetera = new tiquetera();

            $tiquetera->registrarpermiso2($_POST['idus']);

        $cuerpo = '
        <!DOCTYPE html>
        <html>
        <head>
         <title></title>
        </head>
        <body>
        '.$_POST['cuerpo'].'  '.$_POST['asunto'].'  <b> en la fecha: </b> '.$_POST['fechapermi'].'

           <br>
           <br>
            <b>Empleado: </b> '.$_POST['nombre'].'
             <br>
           <b>Número de placa: </b> '.$_POST['nplaca'].'
           <br>
        <b>Documento: </b> '.$_POST['doc'].'
        <br>
        <b>Fecha de nacimiento: </b> '.$_POST['fechana'].'
        </body>
        </html>';

        //para el envío en formato HTML
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        //dirección del remitente
        $headers .= "From: <".$_POST['emisor'].">\r\n";

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
    session_start();
      session_destroy(); 
      header ('location: '. URL . 'login/index');

    }


  public function mensaje3(){

        if(isset($_POST['acomp'])){

            $tiquetera = new tiquetera();

            $tiquetera->registrapermiso($_POST['idus'],$_POST['asunto'],$_POST['fec'],$_POST['fechapermi']);

            $tiquetera = new tiquetera();

            $tiquetera->registrarpermiso3($_POST['idus']);

        $cuerpo = '
        <!DOCTYPE html>
        <html>
        <head>
         <title></title>
        </head>
        <body>
        '.$_POST['cuerpo'].'  '.$_POST['asunto'].'  <b> en la fecha: </b> '.$_POST['fechapermi'].'

           <br>
           <br>
            <b>Empleado: </b> '.$_POST['nombre'].'
             <br>
           <b>Número de placa: </b> '.$_POST['nplaca'].'
           <br>
        <b>Documento: </b> '.$_POST['doc'].'
        <br>
        <b>Fecha de nacimiento: </b> '.$_POST['fechana'].'
        </body>
        </html>';

        //para el envío en formato HTML
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        //dirección del remitente
        $headers .= "From: <".$_POST['emisor'].">\r\n";

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
   session_start();
      session_destroy(); 
      header ('location: '. URL . 'login/index');

    }



public function mensaje4(){

        if(isset($_POST['educ'])){

             $tiquetera = new tiquetera();

            $tiquetera->registrapermiso($_POST['idus'],$_POST['asunto'],$_POST['fec'],$_POST['fechapermi']);

            $tiquetera = new tiquetera();

            $tiquetera->registrarpermiso4($_POST['idus']);

        $cuerpo = '
        <!DOCTYPE html>
        <html>
        <head>
         <title></title>
        </head>
        <body>
        '.$_POST['cuerpo'].'  '.$_POST['asunto'].'  <b> en la fecha: </b> '.$_POST['fechapermi'].'

           <br>
           <br>
            <b>Empleado: </b> '.$_POST['nombre'].'
             <br>
           <b>Número de placa: </b> '.$_POST['nplaca'].'
           <br>
        <b>Documento: </b> '.$_POST['doc'].'
        <br>
        <b>Fecha de nacimiento: </b> '.$_POST['fechana'].'
        </body>
        </html>';

        //para el envío en formato HTML
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        //dirección del remitente
        $headers .= "From: <".$_POST['emisor'].">\r\n";

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
    session_start();
      session_destroy(); 
      header ('location: '. URL . 'login/index');

    }

    public function mensaje5(){

        if(isset($_POST['hora'])){

             $tiquetera = new tiquetera();

            $tiquetera->registrapermiso($_POST['idus'],$_POST['asunto'],$_POST['fec'],$_POST['fechapermi']);

            $tiquetera = new tiquetera();

            $tiquetera->registrarpermiso5($_POST['idus']);

        $cuerpo = '
        <!DOCTYPE html>
        <html>
        <head>
         <title></title>
        </head>
        <body>
        '.$_POST['cuerpo'].'  '.$_POST['asunto'].'  <b> en la fecha: </b> '.$_POST['fechapermi'].'

           <br>
           <br>
            <b>Empleado: </b> '.$_POST['nombre'].'
             <br>
           <b>Número de placa: </b> '.$_POST['nplaca'].'
           <br>
        <b>Documento: </b> '.$_POST['doc'].'
        <br>
        <b>Fecha de nacimiento: </b> '.$_POST['fechana'].'
        </body>
        </html>';

        //para el envío en formato HTML
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        //dirección del remitente
        $headers .= "From: <".$_POST['emisor'].">\r\n";

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
    session_start();
      session_destroy(); 
      header ('location: '. URL . 'login/index');

    }



    public function mensaje6(){

        if(isset($_POST['extra'])){

             $tiquetera = new tiquetera();

            $tiquetera->registrapermiso($_POST['idus'],$_POST['asunto'],$_POST['fec'],$_POST['fechapermi']);

            $tiquetera = new tiquetera();

            $tiquetera->registrarpermiso6($_POST['idus']);

        $cuerpo = '
        <!DOCTYPE html>
        <html>
        <head>
         <title></title>
        </head>
        <body>
        '.$_POST['cuerpo'].'  '.$_POST['asunto'].'  <b> en la fecha: </b> '.$_POST['fechapermi'].'

           <br>
           <br>
            <b>Empleado: </b> '.$_POST['nombre'].'
             <br>
           <b>Número de placa: </b> '.$_POST['nplaca'].'
           <br>
        <b>Documento: </b> '.$_POST['doc'].'
        <br>
        <b>Fecha de nacimiento: </b> '.$_POST['fechana'].'
        </body>
        </html>';

        //para el envío en formato HTML
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        //dirección del remitente
        $headers .= "From: <".$_POST['emisor'].">\r\n";

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
    session_start();
      session_destroy(); 
      header ('location: '. URL . 'login/index');

    }


    public function mensaje7(){

        if(isset($_POST['jorn'])){

             $tiquetera = new tiquetera();

            $tiquetera->registrapermiso($_POST['idus'],$_POST['asunto'],$_POST['fec'],$_POST['fechapermi']);

            $tiquetera = new tiquetera();

            $tiquetera->registrarpermiso7($_POST['idus']);

        $cuerpo = '
        <!DOCTYPE html>
        <html>
        <head>
         <title></title>
        </head>
        <body>
        '.$_POST['cuerpo'].'  '.$_POST['asunto'].'  <b> en la fecha: </b> '.$_POST['fechapermi'].'

           <br>
           <br>
            <b>Empleado: </b> '.$_POST['nombre'].'
             <br>
           <b>Número de placa: </b> '.$_POST['nplaca'].'
           <br>
        <b>Documento: </b> '.$_POST['doc'].'
        <br>
        <b>Fecha de nacimiento: </b> '.$_POST['fechana'].'
        </body>
        </html>';

        //para el envío en formato HTML
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        //dirección del remitente
        $headers .= "From: <".$_POST['emisor'].">\r\n";

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
    session_start();
      session_destroy(); 
      header ('location: '. URL . 'login/index');

    }

    public function mensaje8(){

        if(isset($_POST['salu'])){

            $tiquetera = new tiquetera();

            $tiquetera->registrapermiso($_POST['idus'],$_POST['asunto'],$_POST['fec'],$_POST['fechapermi']);

            $tiquetera = new tiquetera();

            $tiquetera->registrarpermiso8($_POST['idus']);

        $cuerpo = '
        <!DOCTYPE html>
        <html>
        <head>
         <title></title>
        </head>
        <body>
        '.$_POST['cuerpo'].'  '.$_POST['asunto'].'  <b> en la fecha: </b> '.$_POST['fechapermi'].'

           <br>
           <br>
            <b>Empleado: </b> '.$_POST['nombre'].'
             <br>
           <b>Número de placa: </b> '.$_POST['nplaca'].'
           <br>
        <b>Documento: </b> '.$_POST['doc'].'
        <br>
        <b>Fecha de nacimiento: </b> '.$_POST['fechana'].'
        </body>
        </html>';

        //para el envío en formato HTML
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        //dirección del remitente
        $headers .= "From: <".$_POST['emisor'].">\r\n";

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
    session_start();
      session_destroy(); 
      header ('location: '. URL . 'login/index');

    }

    public function mensaje9(){

        if(isset($_POST['formar'])){

             $tiquetera = new tiquetera();

            $tiquetera->registrapermiso($_POST['idus'],$_POST['asunto'],$_POST['fec'],$_POST['fechapermi']);

            $tiquetera = new tiquetera();

            $tiquetera->registrarpermiso9($_POST['idus']);

        $cuerpo = '
        <!DOCTYPE html>
        <html>
        <head>
         <title></title>
        </head>
        <body>
        '.$_POST['cuerpo'].'  '.$_POST['asunto'].'  <b> en la fecha: </b> '.$_POST['fechapermi'].'

           <br>
           <br>
            <b>Empleado: </b> '.$_POST['nombre'].'
             <br>
           <b>Número de placa: </b> '.$_POST['nplaca'].'
           <br>
        <b>Documento: </b> '.$_POST['doc'].'
        <br>
        <b>Fecha de nacimiento: </b> '.$_POST['fechana'].'
        </body>
        </html>';

        //para el envío en formato HTML
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        //dirección del remitente
        $headers .= "From: <".$_POST['emisor'].">\r\n";

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
    session_start();
      session_destroy(); 
      header ('location: '. URL . 'login/index');

    }

    public function mensaje10(){

        if(isset($_POST['perso'])){

            $tiquetera = new tiquetera();

            $tiquetera->registrapermiso($_POST['idus'],$_POST['asunto'],$_POST['fec'],$_POST['fechapermi']);

            $tiquetera = new tiquetera();

            $tiquetera->registrarpermiso10($_POST['idus']);

        $cuerpo = '
        <!DOCTYPE html>
        <html>
        <head>
         <title></title>
        </head>
        <body>
        '.$_POST['cuerpo'].'  '.$_POST['asunto'].'  <b> en la fecha: </b> '.$_POST['fechapermi'].'

           <br>
           <br>
            <b>Empleado: </b> '.$_POST['nombre'].'
             <br>
           <b>Número de placa: </b> '.$_POST['nplaca'].'
           <br>
        <b>Documento: </b> '.$_POST['doc'].'
        <br>
        <b>Fecha de nacimiento: </b> '.$_POST['fechana'].'
        </body>
        </html>';

        //para el envío en formato HTML
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        //dirección del remitente
        $headers .= "From: <".$_POST['emisor'].">\r\n";

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
    session_start();
      session_destroy(); 
      header ('location: '. URL . 'login/index');

    }

    public function mensaje11(){

        if(isset($_POST['grados'])){

            $tiquetera = new tiquetera();

            $tiquetera->registrapermiso($_POST['idus'],$_POST['asunto'],$_POST['fec'],$_POST['fechapermi']);

            $tiquetera = new tiquetera();

            $tiquetera->registrarpermiso11($_POST['idus']);

        $cuerpo = '
        <!DOCTYPE html>
        <html>
        <head>
         <title></title>
        </head>
        <body>
        '.$_POST['cuerpo'].'  '.$_POST['asunto'].'  <b> en la fecha: </b> '.$_POST['fechapermi'].'

           <br>
           <br>
            <b>Empleado: </b> '.$_POST['nombre'].'
             <br>
           <b>Número de placa: </b> '.$_POST['nplaca'].'
           <br>
        <b>Documento: </b> '.$_POST['doc'].'
        <br>
        <b>Fecha de nacimiento: </b> '.$_POST['fechana'].'
        </body>
        </html>';

        //para el envío en formato HTML
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        //dirección del remitente
        $headers .= "From: <".$_POST['emisor'].">\r\n";

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
    session_start();
      session_destroy(); 
      header ('location: '. URL . 'login/index');

    }





    
 }
  ?>
