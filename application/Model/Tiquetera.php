<?php 
namespace Mini\Model;
use Mini\Core\Model;

class Tiquetera extends Model{
   
   public function registrapermiso($idus,$asunto,$fec,$fechapermi)
    {

      $sql="INSERT INTO tiquetera (idusuario , fecha , descripcion, fechapermi, estado) VALUES(:idus, :fec ,:asunto,:fechapermi, 'Pendiente'  )";
            $query=$this->db->prepare($sql);
           $parameters=array(':idus'=>$idus , ':fec'=>$fec , ':asunto'=>$asunto , ':fechapermi'=>$fechapermi);

           session_start();

           if ($query->execute($parameters)) {
        $_SESSION['permisos'] = "<script type='text/javascript'>alertify.success('Se envió la petición')</script>";
      }else
      {
        $_SESSION['permisos'] = "<script type='text/javascript'>alertify.error('Error al enviar')</script>";
      }
          
    }

   public function registrarpermiso($idus)
  {
    session_start();

  $sql = "UPDATE login SET  cumpleaños = '1' WHERE id = :idu";
  $query = $this->db->prepare($sql);
  $parameters = array(':idu' => $idus);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

  if ($query->execute($parameters)) {
    $_SESSION['permi'] = "<script type='text/javascript'>alertify.success('Registro actualizado')</script>";
  }else
  {
    $_SESSION['permi'] = "<script type='text/javascript'>alertify.error('Error al modificar')</script>";

  }
  }

  public function registrarpermiso2($idus)
  {
    session_start();

  $sql = "UPDATE login SET  matrimonio = '1' WHERE id = :idu";
  $query = $this->db->prepare($sql);
  $parameters = array(':idu' => $idus);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

  if ($query->execute($parameters)) {
    $_SESSION['permi'] = "<script type='text/javascript'>alertify.success('Registro actualizado')</script>";
  }else
  {
    $_SESSION['permi'] = "<script type='text/javascript'>alertify.error('Error al modificar')</script>";

  }
  }

  public function registrarpermiso3($idus)
  {
    session_start();

  $sql = "UPDATE login SET  hijos = '1' WHERE id = :idu";
  $query = $this->db->prepare($sql);
  $parameters = array(':idu' => $idus);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

  if ($query->execute($parameters)) {
    $_SESSION['permi'] = "<script type='text/javascript'>alertify.success('Registro actualizado')</script>";
  }else
  {
    $_SESSION['permi'] = "<script type='text/javascript'>alertify.error('Error al modificar')</script>";

  }
  }


   public function registrarpermiso4($idus)
  {
    session_start();

  $sql = "UPDATE login SET  educativo = '1' WHERE id = :idu";
  $query = $this->db->prepare($sql);
  $parameters = array(':idu' => $idus);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

  if ($query->execute($parameters)) {
    $_SESSION['permi'] = "<script type='text/javascript'>alertify.success('Registro actualizado')</script>";
  }else
  {
    $_SESSION['permi'] = "<script type='text/javascript'>alertify.error('Error al modificar')</script>";

  }
  }

  public function registrarpermiso5($idus)
  {
    session_start();

  $sql = "UPDATE login SET  flexible = '1' WHERE id = :idu";
  $query = $this->db->prepare($sql);
  $parameters = array(':idu' => $idus);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

  if ($query->execute($parameters)) {
    $_SESSION['permi'] = "<script type='text/javascript'>alertify.success('Registro actualizado')</script>";
  }else
  {
    $_SESSION['permi'] = "<script type='text/javascript'>alertify.error('Error al modificar')</script>";

  }
  }

  public function registrarpermiso6($idus)
  {
    session_start();

  $sql = "UPDATE login SET  vacaciones = '1' WHERE id = :idu";
  $query = $this->db->prepare($sql);
  $parameters = array(':idu' => $idus);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

  if ($query->execute($parameters)) {
    $_SESSION['permi'] = "<script type='text/javascript'>alertify.success('Registro actualizado')</script>";
  }else
  {
    $_SESSION['permi'] = "<script type='text/javascript'>alertify.error('Error al modificar')</script>";

  }
  }

   public function registrarpermiso7($idus)
  {
    session_start();

  $sql = "UPDATE login SET  recreativa = '1' WHERE id = :idu";
  $query = $this->db->prepare($sql);
  $parameters = array(':idu' => $idus);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

  if ($query->execute($parameters)) {
    $_SESSION['permi'] = "<script type='text/javascript'>alertify.success('Registro actualizado')</script>";
  }else
  {
    $_SESSION['permi'] = "<script type='text/javascript'>alertify.error('Error al modificar')</script>";

  }
  }

   public function registrarpermiso8($idus)
  {
    session_start();

  $sql = "UPDATE login SET  salud = '1' WHERE id = :idu";
  $query = $this->db->prepare($sql);
  $parameters = array(':idu' => $idus);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

  if ($query->execute($parameters)) {
    $_SESSION['permi'] = "<script type='text/javascript'>alertify.success('Registro actualizado')</script>";
  }else
  {
    $_SESSION['permi'] = "<script type='text/javascript'>alertify.error('Error al modificar')</script>";

  }
  }

  public function registrarpermiso9($idus)
  {
    session_start();

  $sql = "UPDATE login SET  formarte = '1' WHERE id = :idu";
  $query = $this->db->prepare($sql);
  $parameters = array(':idu' => $idus);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

  if ($query->execute($parameters)) {
    $_SESSION['permi'] = "<script type='text/javascript'>alertify.success('Registro actualizado')</script>";
  }else
  {
    $_SESSION['permi'] = "<script type='text/javascript'>alertify.error('Error al modificar')</script>";

  }
  }

   public function registrarpermiso10($idus)
  {
    session_start();

  $sql = "UPDATE login SET  diligencias = '1' WHERE id = :idu";
  $query = $this->db->prepare($sql);
  $parameters = array(':idu' => $idus);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

  if ($query->execute($parameters)) {
    $_SESSION['permi'] = "<script type='text/javascript'>alertify.success('Registro actualizado')</script>";
  }else
  {
    $_SESSION['permi'] = "<script type='text/javascript'>alertify.error('Error al modificar')</script>";

  }
  }

  public function registrarpermiso11($idus)
  {
    session_start();

  $sql = "UPDATE login SET  grados = '1' WHERE id = :idu";
  $query = $this->db->prepare($sql);
  $parameters = array(':idu' => $idus);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

  if ($query->execute($parameters)) {
    $_SESSION['permi'] = "<script type='text/javascript'>alertify.success('Registro actualizado')</script>";
  }else
  {
    $_SESSION['permi'] = "<script type='text/javascript'>alertify.error('Error al modificar')</script>";

  }
  }

    public function ListarPermisos(){


     $sql = "SELECT t.id, t.descripcion , t.fecha , t.fechapermi, l.correo , t.estado , t.idusuario , l.user  FROM tiquetera t join login l on l.id=t.idusuario  where t.estado = 'Pendiente'";
     $query = $this->db->prepare($sql);
     $query->execute();

     return $query->fetchAll();

   }


      public function mostrarPermiso($id)
  {
    $sql = "SELECT t.id, t.descripcion , t.fecha , t.fechapermi , l.correo, t.estado , t.idusuario , l.user  FROM tiquetera t join login l on l.id=t.idusuario where t.id = :id LIMIT 1";
    $query = $this->db->prepare($sql);
    $parameters = array(':id' => $id);
    $query->execute($parameters);

    return $query->fetch();
  }

   public function modificarpermiso($estadou,$idu)
  {
    session_start();

  $sql = "UPDATE tiquetera SET  estado = :estadou WHERE id = :idu";
  $query = $this->db->prepare($sql);
  $parameters = array(':estadou' => $estadou, ':idu' => $idu);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

  if ($query->execute($parameters)) {
    $_SESSION['permi'] = "<script type='text/javascript'>alertify.success('Registro actualizado')</script>";
  }else
  {
    $_SESSION['permi'] = "<script type='text/javascript'>alertify.error('Error al modificar')</script>";

  }
  }





  public function restablecer()
  {
    session_start();

  $sql = "UPDATE login SET  cumpleaños = 0 , matrimonio = 0 , hijos = 0 , educativo = 0, flexible = 0 , vacaciones = 0 , recreativa = 0 , salud = 0 , formarte = 0 , diligencias = 0 , grados = 0";
  $query = $this->db->prepare($sql);
  $parameters = array(':estadou' => $estadou, ':idu' => $idu);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

  if ($query->execute($parameters)) {
    $_SESSION['restablecer'] = "<script type='text/javascript'>alertify.success('Permisos restablecidos')</script>";
  }else
  {
    $_SESSION['restablecer'] = "<script type='text/javascript'>alertify.error('No se pudo restablecer los permisos')</script>";

  }
  }
 
  


  public function listarPermi()
    {
        $sql = "CALL listarPermi";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

     public function listarPermi2()
    {
        $sql = "CALL listarPermi2";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

     public function listarPermi3()
    {
        $sql = "CALL listarPermi3";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }



}