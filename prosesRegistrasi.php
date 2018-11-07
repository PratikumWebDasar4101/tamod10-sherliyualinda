<?php  
require_once 'User_model.php';
$um = new User_model();
if (isset($_POST['submit'])) {
	$username 				= $_POST['username'];
	$password 				= $_POST['password'];
	$konfirmasi_password 	= $_POST['konfirmasi_password'];
	if ($password==$konfirmasi_password) {
		$query_success = $um->user_registrasi($username, $password);
		if ($query_success) {
			header('location: index.php');
		}else{
			echo "gagal registrasi";
		}
	} else {
		echo "gagal";
	}
}
?>