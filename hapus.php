<?php  
session_start();
require_once 'User_data_model.php';
$udm = new User_data_model();
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query_success = $udm->hapus_user($id);
	if ($query_success) {
		header('location: dashboard.php');
	} else {
		echo "Ada Kesalahan Saat Menghapus Data <br>";
		die(mysqli_error($conn));
	}
}
?>
