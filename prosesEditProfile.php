<?php  
include_once 'Koneksi.php';
$k = new Koneksi();
session_start();
if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$new_password = md5($_POST['new_password']);
	$konfirmasi_new_password = md5($_POST['konfirmasi_new_password']);
	$old_password = md5($_POST['old_password']);

	$query = "SELECT password FROM user WHERE id = '$id'";
	$result = mysqli_query($k->conn(),$query);
	$d = mysqli_fetch_assoc($result);
	if ($new_password == $konfirmasi_new_password) {
		if($old_password == $d['password']){
			$query = "UPDATE user SET password = '$new_password' WHERE id = '$id'";
			$result = mysqli_query($k->conn(),$query);
			if ($result) {
				echo "Sukses!";
				echo "<a href='profile.php'>Profil</a>";
			} else {
				echo "Gagal : " . mysqli_error($k->conn()) . "<br>";
				echo "<a href='profile.php'>Profil</a>";
			}
		} else {
			echo "password lama salah!";
			echo "<a href='profile.php'>Profil</a>";
		}
	} else {
		echo "konfirmasi password salah!";
		echo "<a href='profile.php'>Profil</a>";
	}

}
?>
