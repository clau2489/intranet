<?php
require_once "config/database.php";
require_once "config/fungsi_tanggal.php";
require_once "config/fungsi_rupiah.php";
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
else {
	if ($_GET['module'] == 'profile-superuser') {
		include "modules/profile-superuser/view.php";
	}
	//Agregar modulo profile transito y form_transito
	if ($_GET['module'] == 'profile-transito') {
		include "modules/profile-transito/view.php";
	}
	elseif ($_GET['module'] == 'form_transito') {
		include "modules/profile-transito/form.php";
	}
	elseif ($_GET['module'] == 'print_transito') {
		include "modules/profile-transito/print.php";
	}

	elseif ($_GET['module'] == 'user') {
		include "modules/user/view.php";
	}
	elseif ($_GET['module'] == 'form_user') {
		include "modules/user/form.php";
	}
	elseif ($_GET['module'] == 'profile') {
		include "modules/profile/view.php";
		}
	elseif ($_GET['module'] == 'form_profile') {
		include "modules/profile/form.php";
	}
	elseif ($_GET['module'] == 'password') {
		include "modules/password/view.php";
	}
}
?>