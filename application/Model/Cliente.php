<?php 
namespace Mini\Model;
use Mini\Core\Model;

class Cliente extends Model{

  
public function ListarClientes(){


     $sql = "SELECT idcliente, nombre , ciudad , direccion , telefono , nombredec , ncuenta FROM cliente ";
     $query = $this->db->prepare($sql);
     $query->execute();

     return $query->fetchAll();

   }


   public function registraCliente($nombre,$direccion,$telefono,$nombredec,$ciudad,$ncuenta)
  	{

  		$sql="INSERT INTO cliente (nombre , direccion , telefono , nombredec , ciudad ,ncuenta) VALUES(:nombre, :direccion ,:telefono , :nombredec , :ciudad , :ncuenta )";
            $query=$this->db->prepare($sql);
           $parameters=array(':nombre'=>$nombre, ':direccion'=>$direccion , ':telefono'=>$telefono , ':nombredec'=>$nombredec , ':ciudad'=>$ciudad, ':ncuenta'=>$ncuenta);

           session_start();

           if ($query->execute($parameters)) {
        $_SESSION['clienter'] = "<script type='text/javascript'>alertify.success('Registro exitoso')</script>";
      }else
      {
        $_SESSION['clienter'] = "<script type='text/javascript'>alertify.error('Error al registrar')</script>";
      }
          
  	}


  	  public function mostrarClientes($idcliente)
  {
    $sql = "SELECT idcliente, nombre, ncuenta,  ciudad ,direccion , telefono , nombredec FROM cliente WHERE idcliente = :idcliente LIMIT 1";
    $query = $this->db->prepare($sql);
    $parameters = array(':idcliente' => $idcliente);
    $query->execute($parameters);

    return $query->fetch();
  }


  public function modificarCliente($idcliente,$nombrec,$ciudadc,$direccionc,$telefonoc , $nombredecc,$ncuentac)
  {
    session_start();

  $sql = "UPDATE cliente SET  nombre = :nombre , ciudad = :ciudad ,  direccion = :direccion , telefono = :telefono , nombredec = :nombredec, ncuenta = :ncuenta WHERE idcliente = :idcliente";
  $query = $this->db->prepare($sql);
  $parameters = array(':nombre' => $nombrec, ':ciudad' => $ciudadc,   ':direccion' => $direccionc,':telefono' => $telefonoc ,':nombredec' => $nombredecc,':ncuenta' => $ncuentac , ':idcliente' => $idcliente);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

  if ($query->execute($parameters)) {
    $_SESSION['userMass'] = "<script type='text/javascript'>alertify.success('Registro actualizado')</script>";
  }else
  {
    $_SESSION['userMass'] = "<script type='text/javascript'>alertify.error('Error al modificar')</script>";

  }
  }

  public function borraCliente($idcliente){



  $sql = "DELETE FROM cliente WHERE idcliente = :idcliente";
  $query = $this->db->prepare($sql);
  $parameters = array(':idcliente' => $idcliente);
  $query->execute($parameters);

}


}


?>