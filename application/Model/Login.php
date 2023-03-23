<?php 
namespace Mini\Model;
use Mini\Core\Model;

class Login extends Model{
	

	public function validar($email,$pass){
		session_start();
		$sql = "SELECT * FROM login WHERE email='$email' and estado=1";
		$query = $this->db->prepare($sql);
		$query->execute();
		$row = $query->fetch(\PDO::FETCH_ASSOC); 
		if($row["email"] == $email && $row["pasadmin"] == $pass){

			if ($row["rol"] == 1) {
				$_SESSION["Administrador"] = $row["rol"];
				$_SESSION["admin"] = $row["user"];
				$_SESSION["admin2"] = $row["cargo"];
				$_SESSION["admin3"] = $row["email"];
				$_SESSION["admin4"] = $row["nplaca"];
				$_SESSION["admin5"] = $row["documento"];
				$_SESSION["admin6"] = $row["fechanacimiento"];
				$_SESSION["admin7"] = $row["cumpleaños"];
				$_SESSION["admin8"] = $row["matrimonio"];
				$_SESSION["admin9"] = $row["hijos"];
				$_SESSION["admin10"] = $row["educativo"];
				$_SESSION["admin11"] = $row["flexible"];
				$_SESSION["admin12"] = $row["vacaciones"];
				$_SESSION["admin13"] = $row["recreativa"];
				$_SESSION["admin14"] = $row["salud"];
				$_SESSION["admin15"] = $row["formarte"];
				$_SESSION["admin16"] = $row["diligencias"];
				$_SESSION["admin17"] = $row["grados"];
				$_SESSION['MSJ'] = '<script>alertify.success("BIENVENIDO ADMINISTRADOR")</script> ';
				header ('location: '. URL . 'home/index');
			}else if ($row["rol"] == 2) {
				$_SESSION["Monitoreo"] = $row["id"];
				$_SESSION["vende"] = $row["user"];
				$_SESSION["vende2"] = $row["cargo"];
				$_SESSION["vende3"] = $row["email"];
				$_SESSION['MSJV'] = '<script>alertify.success("BIENVENIDO A SEGURTECV2")</script> ';
				header ('location: '. URL . 'home/index');
			}else if ($row["rol"] == 3) {
				$_SESSION["Electronica"] = $row["id"];
				$_SESSION["elect"] = $row["user"];
				$_SESSION["elect2"] = $row["cargo"];
				$_SESSION["elect3"] = $row["email"];
				$_SESSION["elect4"] = $row["nplaca"];
				$_SESSION["elect5"] = $row["documento"];
				$_SESSION['MSJV'] = '<script>alertify.success("BIENVENIDO A SEGURTECV2")</script> ';
				header ('location: '. URL . 'home/index');
			}else if ($row["rol"] == 4) {
				$_SESSION["Laboratorio"] = $row["id"];
				$_SESSION["lab"] = $row["user"];
				$_SESSION["lab2"] = $row["cargo"];
				$_SESSION["lab3"] = $row["email"];
				$_SESSION['MSJV'] = '<script>alertify.success("BIENVENIDO A SEGURTECV2")</script> ';
				header ('location: '. URL . 'home/index');
			
		}else if ($row["rol"] == 5) {
				$_SESSION["Director"] = $row["id"];
				$_SESSION["dir"] = $row["user"];
				$_SESSION["dir2"] = $row["cargo"];
				$_SESSION["dir3"] = $row["email"];
				$_SESSION["dir4"] = $row["nplaca"];
				$_SESSION["dir5"] = $row["documento"];
				$_SESSION["dir6"] = $row["fechanacimiento"];
				$_SESSION["dir7"] = $row["cumpleaños"];
				$_SESSION["dir8"] = $row["matrimonio"];
				$_SESSION["dir9"] = $row["hijos"];
				$_SESSION["dir10"] = $row["educativo"];
				$_SESSION["dir11"] = $row["flexible"];
				$_SESSION["dir12"] = $row["vacaciones"];
				$_SESSION["dir13"] = $row["recreativa"];
				$_SESSION["dir14"] = $row["salud"];
				$_SESSION["dir15"] = $row["formarte"];
				$_SESSION["dir16"] = $row["diligencias"];
				$_SESSION["dir17"] = $row["grados"];
				$_SESSION['MSJV'] = '<script>alertify.success("BIENVENIDO A SEGURTECV2")</script> ';
				header ('location: '. URL . 'home/index');
			}else if ($row["rol"] == 6) {
				$_SESSION["Empleado"] = $row["id"];
				$_SESSION["empl"] = $row["user"];
				$_SESSION["empl2"] = $row["cargo"];
				$_SESSION["empl3"] = $row["email"];
				$_SESSION["empl4"] = $row["nplaca"];
				$_SESSION["empl5"] = $row["documento"];
				$_SESSION["empl6"] = $row["fechanacimiento"];
				$_SESSION["empl7"] = $row["cumpleaños"];
				$_SESSION["empl8"] = $row["matrimonio"];
				$_SESSION["empl9"] = $row["hijos"];
				$_SESSION["empl10"] = $row["educativo"];
				$_SESSION["empl11"] = $row["flexible"];
				$_SESSION["empl12"] = $row["vacaciones"];
				$_SESSION["empl13"] = $row["recreativa"];
				$_SESSION["empl14"] = $row["salud"];
				$_SESSION["empl15"] = $row["formarte"];
				$_SESSION["empl16"] = $row["diligencias"];
				$_SESSION["empl17"] = $row["grados"];
				$_SESSION['MSJV'] = '<script>alertify.success("BIENVENIDO A SEGURTECV2")</script> ';
				header ('location: '. URL . 'home/index');
			}
		}

		
		else{
			
			$_SESSION['rr'] = '<script>alertify.error("Usuario o contraseña incorrectos")</script> ';

			header ('location: '. URL . 'login/index');
		}

		if ($row["estado"] == 0) {
				$_SESSION['rar'] = '<script>alertify.error("SU CUENTA ESTA INACTIVA")</script> ';
				header ('location: '. URL . 'login/index');
			}

	}
	public function Correo($correo){
		$sql = "CALL Correo(:correo)";
		$query = $this->db->prepare($sql);
		$parameters = array(':correo' => $correo);
		$query->execute($parameters);
		return $query->fetch();

	}
}
?>