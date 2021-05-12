<?php
session_start();
require_once "../../config/database.php";
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
else {
//Insertar Usuario
	if ($_GET['act']=='insert') {
		$acta = $_POST['acta'];
		$fecha = $_POST['fecha'];
		$hora = $_POST['hora'];
		$lugar = $_POST['lugar'];
		$vehiculo = $_POST['vehiculo'];
		$n_motor = $_POST['n_motor'];
		$n_chasis = $_POST['n_chasis'];
		$dominio = $_POST['dominio'];				
		$conductor = $_POST['conductor'];
		$inspector = $_POST['inspector'];
		$falta = $_POST['falta'];
		$observaciones = $_POST['observaciones'];
		$remitido = $_POST['remitido'];
		$acta_remitida_a_faltas = $_POST['acta_remitida_a_faltas'];
		$fecha_liberacion = $_POST['fecha_liberacion'];
		//inserto la consulta mysql
		$query = mysqli_query($mysqli, "INSERT INTO transito (acta, fecha, hora, lugar, vehiculo, n_motor, n_chasis, dominio, conductor, inspector, falta, observaciones, remitido, acta_remitida_a_faltas, fecha_liberacion) VALUES('$acta','$fecha','$hora','$lugar','$vehiculo','$n_motor','$n_chasis','$dominio','$conductor','$inspector','$falta','$observaciones','$remitido','$acta_remitida_a_faltas','$fecha_liberacion'") or die ('error: '.mysqli_error($mysqli));
		if ($query) {
			header("location: ../../main.php?module=profile-transito");
			}
		else {
			echo "No se puede agregar el registro";
		}	
	}

//Actualizar Usuario
	elseif ($_GET['act']=='update') {
		$id = $_POST['id'];
		$acta = $_POST['acta'];
		$fecha = $_POST['fecha'];
		$hora = $_POST['hora'];
		$lugar = $_POST['lugar'];
		$vehiculo = $_POST['vehiculo'];
		$n_motor = $_POST['n_motor'];
		$n_chasis = $_POST['n_chasis'];
		$dominio = $_POST['dominio'];				
		$conductor = $_POST['conductor'];
		$inspector = $_POST['inspector'];
		$falta = $_POST['falta'];
		$observaciones = $_POST['observaciones'];
		$remitido = $_POST['remitido'];
		$acta_remitida_a_faltas = $_POST['acta_remitida_a_faltas'];
		$fecha_liberacion = $_POST['fecha_liberacion'];
		//inserto la consulta mysql
		$query = mysqli_query($mysqli, "UPDATE transito SET acta = '$acta', fecha = '$fecha', hora = '$hora', lugar = '$lugar', vehiculo = '$vehiculo', n_motor = '$n_motor', n_chasis = '$n_chasis', dominio = '$dominio', conductor = '$conductor', inspector = '$inspector', falta = '$falta', observaciones = '$observaciones', remitido = '$remitido', acta_remitida_a_faltas = '$acta_remitida_a_faltas', fecha_liberacion = '$fecha_liberacion' WHERE id='$id'") or die ('error: '.mysqli_error($mysqli));
		if ($query) {
			header("location: ../../main.php?module=profile-transito");
			}
		else {
			echo "No se puede actualizar el registro";
		}
	}

//Activar Usuario
	elseif ($_GET['act']=='on') {
		if (isset($_GET['id'])) {
			$id_user = $_GET['id'];
			$status  = "activo";
			$query = mysqli_query($mysqli, "UPDATE usuarios SET status  = '$status'
				WHERE id_user = '$id_user'")
			or die('error: '.mysqli_error($mysqli));
			if ($query) {
				header("location: ../../main.php?module=user&alert=3");
			}
		}
	}

//Desactivar Usuario
	elseif ($_GET['act']=='off') {
		if (isset($_GET['id'])) {
			$id_user = $_GET['id'];
			$status  = "bloqueado";
			$query = mysqli_query($mysqli, "UPDATE usuarios SET status  = '$status'
				WHERE id_user = '$id_user'")
			or die('Error : '.mysqli_error($mysqli));
			if ($query) {
				header("location: ../../main.php?module=user&alert=4");
			}
		}
	}		
}		
?>