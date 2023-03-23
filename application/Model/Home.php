<?php 
namespace Mini\Model;
use Mini\Core\Model;

class Home extends Model{ 

public function cambiarPass($idperson,$pasado)
  {
    session_start();

  $sql = "UPDATE login SET  pasadmin = :pasado WHERE id = :idperson";
  $query = $this->db->prepare($sql);
  $parameters = array(':pasado' => $pasado,':idperson' => $idperson);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

  if ($query->execute($parameters)) {
    $_SESSION['ZIZIZAS'] = "<script type='text/javascript'>alertify.success('Contraseña cambianda')</script>";
  }else
  {
    $_SESSION['ZIZIZAS'] = "<script type='text/javascript'>alertify.error('No se pudo cambiar la contraseña')</script>";

  }
  }











}

?>