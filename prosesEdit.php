<?php  
include "Koneksi.php";
$k = new Koneksi();
if (isset($_POST['submit'])) {
	$id = $_POST['id'];
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

	$query ="UPDATE `data_user` SET 
			`nama_depan`='$nama_depan',
			`nama_belakang`='$nama_belakang',
			`nim`='$nim',
			`kelas`='$kelas',
			`hobby`='$data_hobby',
			`genre_film`='$data_genre_film',
			`tempat_wisata`='$data_tempat_wisata',
			`tanggal_lahir`='$tanggal_lahir' 
			WHERE id = '$id'";
	$result =mysqli_query ($k->conn(),$query) or die(mysqli_error($k->conn()));
	if ($result) {
		header('location: dashboard.php');
	}else{
		header('location: edit.php?id=' . $id);
	}

}
?>