<?php 
namespace Mini\Model;
use Mini\Core\Model;

class Caso extends Model{



	public function ListarCaso(){


     $sql = "CALL listarCaso";
     $query = $this->db->prepare($sql);
     $query->execute();

     return $query->fetchAll();

   }

   public function ListarCasoen(){


     $sql = "CALL listarCasoen";
     $query = $this->db->prepare($sql);
     $query->execute();

     return $query->fetchAll();

   }

   public function ListarCasoenm(){


     $sql = "CALL listarCasoenm";
     $query = $this->db->prepare($sql);
     $query->execute();

     return $query->fetchAll();

   }



    public function ListarSeguimiento($id){
     $sql = "SELECT s.idseguimiento, s.seguimiento , s.idcaso , c.id FROM seguimiento s join caso c on s.idcaso = c.id where s.idcaso = :id";
     $query = $this->db->prepare($sql);
    $parameters = array(':id' => $id);
      $query->execute($parameters);
    

     return $query->fetchAll();

   }




   public function traercliente($idcliente){
      $sql = "SELECT idcliente, nombre , ciudad , direccion , telefono , nombredec ,ncuenta FROM cliente where idcliente = :idcliente";
      $query = $this->db->prepare($sql);
      $parameters = array(':idcliente' => $idcliente);
      $query->execute($parameters);
      return $query->fetch();
  }

  public function registraCaso($idcliente,$fec,$res,$falla,$descripcion)
  	{

  		$sql="INSERT INTO caso (idcliente , fecha , responsable , falla , descripcion ,estado) VALUES(:idcliente, :fecha ,:responsable , :falla , :descripcion , 'En proceso' )";
            $query=$this->db->prepare($sql);
           $parameters=array(':idcliente'=>$idcliente, ':fecha'=>$fec , ':responsable'=>$res , ':falla'=>$falla , ':descripcion'=>$descripcion);

           session_start();

           if ($query->execute($parameters)) {
        $_SESSION['caso'] = "<script type='text/javascript'>alertify.success('Registro exitoso')</script>";
      }else
      {
        $_SESSION['caso'] = "<script type='text/javascript'>alertify.error('Error al registrar')</script>";
      }
          
  	}

  


   public function mostrarCasos($id)
  {
    $sql = "SELECT c.id, c.falla, c.responsable, c.fecha ,c.descripcion , c.solucion , c.estado , l.idcliente , l.nombre , l.ncuenta , l.nombredec , l.ciudad , l.direccion , l.telefono , s.idseguimiento , s.seguimiento , s.fechas , s.responsablese , s.horaregistro , c.responsablesolu , c.fechasolu FROM caso c LEFT JOIN cliente l on c.idcliente=l.idcliente LEFT JOIN seguimiento s on c.id=s.idcaso where id = :id ";
    $query = $this->db->prepare($sql);
    $parameters = array(':id' => $id);
    $query->execute($parameters);

    return $query->fetchAll();
  }


  public function modificarCaso($estadoca,$solucionado,$id,$responsolu,$feshas)
  {
    session_start();

  $sql = "UPDATE caso SET  estado = :estado , solucion = :solucionado , responsablesolu = :responsolu , fechasolu = :feshas WHERE id = :id";
  $query = $this->db->prepare($sql);
  $parameters = array(':estado' => $estadoca,  ':solucionado' => $solucionado,  ':responsolu' => $responsolu,  ':feshas' => $feshas, ':id' => $id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

  if ($query->execute($parameters)) {
    $_SESSION['casos'] = "<script type='text/javascript'>alertify.success('Registro actualizado')</script>";
  }else
  {
    $_SESSION['casos'] = "<script type='text/javascript'>alertify.error('Error al modificar')</script>";

  }
  }


  public function agregarS($seguimiento,$respo,$fechatelem,$horaactual,$id)
  {
    $sql="INSERT INTO seguimiento (seguimiento , responsablese , fechas , horaregistro , idcaso ) VALUES(:seguimiento, :respo , :fechatelem , :horaactual , :idcaso  )";
            $query=$this->db->prepare($sql);
           $parameters=array(':seguimiento'=>$seguimiento, ':respo'=>$respo ,':fechatelem'=>$fechatelem, ':horaactual'=>$horaactual ,':idcaso'=>$id);
           $query->execute($parameters);
      
  }

  public function listarCasoss()
    {
        $sql = "CALL listarCasoss";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function listarCasossm()
    {
        $sql = "CALL listarCasossm";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function listarCasoshoy($fecha12)
    {
        $sql = "CALL listarfecha(:fechatr)";
       $query = $this->db->prepare($sql);
    $parameters = array(':fechatr' => $fecha12);
    $query->execute($parameters);

    return $query->fetchAll();
    }

    public function borraCaso($idp){

  $sql = "DELETE FROM caso WHERE id = :idp";
  $query = $this->db->prepare($sql);
  $parameters = array(':idp' => $idp);
  $query->execute($parameters);

}

public function ConsultaFecha($feinicial,$fefinal)
    {
        $sql = "CALL ConsultaFecha(:feinicial,:fefinal)";
        $query = $this->db->prepare($sql);
        $parameters = array(':feinicial' => $feinicial,':fefinal' => $fefinal);
    $query->execute($parameters);

    return $query->fetchAll();
    }



}