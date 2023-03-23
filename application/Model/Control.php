<?php 
namespace Mini\Model;
use Mini\Core\Model;

  class Control extends Model{

  	
      public function registraUsuario($user,$email,$pasadmin,$provincia,$pueblo)
  	{

  		$sql="INSERT INTO login (user , email , pasadmin , cargo , rol ,estado ) VALUES(:user, :email ,:pasadmin , :provincia ,  :pueblo ,1 )";
            $query=$this->db->prepare($sql);
           $parameters=array(':user'=>$user, ':email'=>$email , ':pasadmin'=>$pasadmin , ':provincia'=>$provincia , ':pueblo'=>$pueblo  );

           session_start();

           if ($query->execute($parameters)) {
        $_SESSION['usuarior'] = "<script type='text/javascript'>alertify.success('Registro exitoso')</script>";
      }else
      {
        $_SESSION['usuarior'] = "<script type='text/javascript'>alertify.error('Error al registrar')</script>";
      }
          
  	}

    public function registraUsuario2($user,$email,$pasadmin,$provincia,$pueblo,$fechanacimiento,$nplaca,$documento)
    {

      $sql="INSERT INTO login (user , email , pasadmin , cargo , rol , fechanacimiento , nplaca , documento, estado ) VALUES(:user, :email ,:pasadmin , :provincia ,  :pueblo  , :fechanacimiento , :nplaca , :documento , 1)";
            $query=$this->db->prepare($sql);
           $parameters=array(':user'=>$user, ':email'=>$email , ':pasadmin'=>$pasadmin , ':provincia'=>$provincia , ':pueblo'=>$pueblo , ':fechanacimiento'=>$fechanacimiento , ':nplaca'=>$nplaca , ':documento'=>$documento );

           session_start();

           if ($query->execute($parameters)) {
        $_SESSION['usuarior2'] = "<script type='text/javascript'>alertify.success('Registro exitoso')</script>";
      }else
      {
        $_SESSION['usuarior2'] = "<script type='text/javascript'>alertify.error('Error al registrar')</script>";
      }
          
    }


     	public function ListarUsuarios(){


     $sql = "SELECT id ,user,email,cargo , rol , estado FROM login WHERE rol='2' or rol='3' or rol='4' or rol='5'  ";
     $query = $this->db->prepare($sql);
     $query->execute();

     return $query->fetchAll();



   }

   public function ListarUsuarios2(){


     $sql = "SELECT id ,user,email,cargo , rol , estado  , fechanacimiento , nplaca , documento FROM login WHERE rol='6' ";
     $query = $this->db->prepare($sql);
     $query->execute();

     return $query->fetchAll();



   }



      public function mostrarUsuarios($id)
  {
    $sql = "SELECT id, user, email,cargo , rol , estado ,pasadmin  FROM login WHERE id = :id LIMIT 1";
    $query = $this->db->prepare($sql);
    $parameters = array(':id' => $id);
    $query->execute($parameters);

    return $query->fetch();
  }

  public function mostrarUsuarios2($id)
  {
    $sql = "SELECT id, user, email,cargo , rol , estado ,pasadmin, fechanacimiento , nplaca , documento FROM login WHERE id = :id LIMIT 1";
    $query = $this->db->prepare($sql);
    $parameters = array(':id' => $id);
    $query->execute($parameters);

    return $query->fetch();
  }


   public function modificarUsuario($id,$useru,$mailu,$pasadminu,$estado)
  {
    session_start();

  $sql = "UPDATE login SET  user = :user , email = :email ,  pasadmin = :pasadmin , estado = :estado WHERE id = :id";
  $query = $this->db->prepare($sql);
  $parameters = array(':user' => $useru, ':email' => $mailu,   ':pasadmin' => $pasadminu,':estado' => $estado , ':id' => $id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

  if ($query->execute($parameters)) {
    $_SESSION['userMas'] = "<script type='text/javascript'>alertify.success('Registro actualizado')</script>";
  }else
  {
    $_SESSION['userMas'] = "<script type='text/javascript'>alertify.error('Error al modificar')</script>";

  }
  }

  public function modificarUsuario2($id,$useru,$mailu,$pasadminu,$estado,$fechanacimientom,$nplacam,$documentom)
  {
    session_start();

  $sql = "UPDATE login SET  user = :user , email = :email ,  pasadmin = :pasadmin , estado = :estado  , fechanacimiento = :fechanacimientom , nplaca = :nplacam , documento = :documentom WHERE id = :id";
  $query = $this->db->prepare($sql);
  $parameters = array(':user' => $useru, ':email' => $mailu,   ':pasadmin' => $pasadminu ,':fechanacimientom' => $fechanacimientom ,':estado' => $estado,':nplacam' => $nplacam,':documentom' => $documentom, ':id' => $id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

  if ($query->execute($parameters)) {
    $_SESSION['userMass'] = "<script type='text/javascript'>alertify.success('Registro actualizado')</script>";
  }else
  {
    $_SESSION['userMass'] = "<script type='text/javascript'>alertify.error('Error al modificar')</script>";

  }
  }

  public function borrausuario($id){



  $sql = "DELETE FROM login WHERE id = :id";
  $query = $this->db->prepare($sql);
  $parameters = array(':id' => $id);
  $query->execute($parameters);

}






  	}


  ?>