<?php
require_once 'User_data_model.php';
$um = new User_data_model();
if (isset($_POST['submit'])) {
	$nama_depan = $_POST['nama_depan'];
	$nama_belakang = $_POST['nama_belakang'];
	$nim = $_POST['nim'];
	$kelas = $_POST['kelas'];
	$hobby = $_POST['hobby'];
	$data_hobby = implode(", ", $hobby);
	$genre_film = $_POST['genre_film'];
	$data_genre_film = implode(", ", $genre_film);
	$tempat_wisata = $_POST['tempat_wisata'];
	$data_tempat_wisata = implode(", ", $tempat_wisata);
	$tanggal_lahir = $_POST['tanggal_lahir'];

	$query_success = $um->data_user($nama_depan,$nama_belakang,$nim,$kelas,$data_hobby,$data_genre_film,$data_tempat_wisata,$tanggal_lahir);
	if ($query_success) {
		header('location: dashboard.php');
	}else{
		header('location: newData.php');
	}

}
?>
