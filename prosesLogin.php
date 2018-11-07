<?php  
require_once 'User_model.php';
$um = new User_model();
session_start();
if (isset($_POST['submit'])) {
	$username =$_POST['username'];
	$password =$_POST['password'];
	
	$query_success = $um->user_login($username,$password);

	$result = mysqli_num_rows($query_success);
	
	if ($result>0) {
		$data = mysqli_fetch_array($query_success);
		$_SESSION ['id']=$data['id'];
		$_SESSION ['username']= $data['username'];
		header('location: dashboard.php');
	}else{
		$_SESSION['prosesRegistrasi'] = "Username atau Password Belum Terdaftar atau Salah";
		header('location: index.php');
	}
}
?>