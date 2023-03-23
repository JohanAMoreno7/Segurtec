<?php 
namespace Mini\Model;
use Mini\Core\Model;

class Laboratorio extends Model{ 


	public function traercliente($idcliente){
      $sql = "SELECT idcliente, nombre FROM cliente where idcliente = :idcliente";
      $query = $this->db->prepare($sql);
      $parameters = array(':idcliente' => $idcliente);
      $query->execute($parameters);
      return $query->fetch();
  }

  public function ListarClientes(){


     $sql = "SELECT idcliente, nombre , ciudad , direccion , telefono , nombredec , ncuenta FROM cliente ";
     $query = $this->db->prepare($sql);
     $query->execute();

     return $query->fetchAll();

   }

   public function registraEquipo($fec,$fece,$codigo,$codigolab,$controlab,$codigor,$description,$idcliente,$sintomes)
    {

      $sql="INSERT INTO equipos ( fechaingreso , fechaentrega , codigosistema ,  consecutivolab , consecutivos , codigoreferencia , descripcion , idcliente , sintomas , estado) VALUES(:fec, :fece ,:codigo  , :codigolab , :controlab, :codigor , :description , :idcliente , :sintomes , 'Pendiente'  )";
            $query=$this->db->prepare($sql);
           $parameters=array(':fec'=>$fec , ':fece'=>$fece , ':codigo'=>$codigo , ':codigolab'=>$codigolab , ':controlab'=>$controlab, ':codigor'=>$codigor, ':description'=>$description, ':idcliente'=>$idcliente, ':sintomes'=>$sintomes);

           session_start();

           if ($query->execute($parameters)) {
        $_SESSION['equipo'] = "<script type='text/javascript'>alertify.success('Registro exitoso')</script>";
      }else
      {
        $_SESSION['equipo'] = "<script type='text/javascript'>alertify.error('Error al registrar')</script>";
      }
          
    }

     public function ListarEquipos($fecha13)
    {
        $sql = "CALL listarequipos(:fechart)";
       $query = $this->db->prepare($sql);
    $parameters = array(':fechart' => $fecha13);
    $query->execute($parameters);

    return $query->fetchAll();
    }


    public function editarEquipo($idequipo)
  {
    $sql = "SELECT idequipo, fechaingreso, codigosistema, consecutivolab, codigoreferencia, descripcion, consecutivos, estado, idcliente, sintomas, fechaentrega, solucion FROM equipos where idequipo = :idequipo ";
    $query = $this->db->prepare($sql);
    $parameters = array(':idequipo' => $idequipo);
    $query->execute($parameters);

    return $query->fetch();
  }

  public function modificarEquipo($sintomas,$estado,$solucion,$idequipo)
  {
    session_start();

  $sql = "UPDATE equipos SET  sintomas = :sintomas , estado = :estado ,  solucion = :solucion WHERE idequipo = :idequipo";
  $query = $this->db->prepare($sql);
  $parameters = array(':sintomas' => $sintomas, ':estado' => $estado,   ':solucion' => $solucion , ':idequipo' => $idequipo);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

  if ($query->execute($parameters)) {
    $_SESSION['equipos'] = "<script type='text/javascript'>alertify.success('Registro actualizado')</script>";
  }else
  {
    $_SESSION['equipos'] = "<script type='text/javascript'>alertify.error('Error al modificar')</script>";

  }
  }

  public function borraEquipo($idequipo){



  $sql = "DELETE FROM equipos WHERE idequipo = :idequipo";
  $query = $this->db->prepare($sql);
  $parameters = array(':idequipo' => $idequipo);
  $query->execute($parameters);

}

public function listarEquips()
    {
        $sql = "CALL listarEquips";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function listarEquips2()
    {
        $sql = "CALL listarEquips2";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    public function listarEquips3()
    {
        $sql = "CALL listarEquips3";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    public function listarEquips4()
    {
        $sql = "CALL listarEquips4";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    public function listarEquips5()
    {
        $sql = "CALL listarEquips5";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function listarequiposhoy($fecha13)
    {
        $sql = "CALL listarfechae(:fechatrr)";
       $query = $this->db->prepare($sql);
    $parameters = array(':fechatrr' => $fecha13);
    $query->execute($parameters);

    return $query->fetchAll();
    }




}