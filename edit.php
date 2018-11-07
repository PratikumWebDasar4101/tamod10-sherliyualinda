<?php  
include_once 'Koneksi.php';
$k = new Koneksi();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>6701174057</title>
</head>
<body>
	<br>
	<br>
	<center>
		<a href="dashboard.php">Dashboard</a>
		<h3>EDIT USER</h3>
		<table bgcolor="pink">
			<form action="prosesEdit.php" method="POST">
			<?php
			$id = $_GET['id'];
			$query ="SELECT * FROM data_user WHERE id = '$id'";
			$result = mysqli_query($k->conn(),$query);
			$data = mysqli_fetch_array($result);
			?>
			<input type="hidden" name="id" value="<?php echo $id; ?>">
		
			<tr>
				<td>Nama Depan</td>
				<td>
					<input type="text" name="nama_depan" value="<?php echo $data['nama_depan']?>">
				</td>
			</tr>
			<tr>
				<td>Nama Belakang</td>
				<td>
					<input type="text" name="nama_belakang" value="<?php echo $data['nama_belakang']?>">
				</td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>
					<input type="text" name="nim" value="<?php echo $data['nim']?>">
				</td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>
					<input type="text" name="kelas" value="<?php echo $data['kelas']?>">
				</td>
			</tr>
			<tr>
				<td>hobby</td>
				<td>
					<?php 
						$hobby = explode(", ", $data['hobby']);
					?>
					<input type="checkbox" name="hobby[]" value="Menulis" <?php echo in_array("Menulis", $hobby) ? "checked" : ""; ?>>Menulis
					<input type="checkbox" name="hobby[]" value="Membaca" <?php echo in_array("Membaca", $hobby) ? "checked" : ""; ?>>Membaca
					<input type="checkbox" name="hobby[]" value="Makan" <?php echo in_array("Makan", $hobby) ? "checked" : ""; ?>>Makan
					<input type="checkbox" name="hobby[]" value="Tidur" <?php echo in_array("Tidur", $hobby) ? "checked" : ""; ?>>Tidur
					<input type="checkbox" name="hobby[]" value="Belajar" <?php echo in_array("Belajar", $hobby) ? "checked" : ""; ?>>Belajar<br>
					<input type="checkbox" name="hobby[]" value="Berenang" <?php echo in_array("Berenang", $hobby) ? "checked" : ""; ?>>Berenang
					<input type="checkbox" name="hobby[]" value="Basket" <?php echo in_array("Basket", $hobby) ? "checked" : ""; ?>>Basket
					<input type="checkbox" name="hobby[]" value="Badminton" <?php echo in_array("Badminton", $hobby) ? "checked" : ""; ?>>Badminton
					<input type="checkbox" name="hobby[]" value="Nonton" <?php echo in_array("Nonton", $hobby) ? "checked" : ""; ?>>Nonton
				</td>
			</tr>
			<tr>
				<td>Genre Film</td>
				<td>
					<?php 
						$film = explode(", ", $data['genre_film']);
					?>
					<input type="checkbox" name="genre_film[]" value="horror" <?php echo in_array("horror", $film) ? "checked" : ""; ?>>Horror
					<input type="checkbox" name="genre_film[]" value="anime" <?php echo in_array("anime", $film) ? "checked" : ""; ?>>Anime
					<input type="checkbox" name="genre_film[]" value="action" <?php echo in_array("action", $film) ? "checked" : ""; ?>>Action
					<input type="checkbox" name="genre_film[]" value="drama" <?php echo in_array("drama", $film) ? "checked" : ""; ?>>Drama
				</td>
			</tr>
			<tr>
				<td>Tempat Wisata</td>
				<td>
					<?php 
						$wisata = explode(", ", $data['tempat_wisata']);
					?>
					<input type="checkbox" name="tempat_wisata[]" value="bali" <?php echo in_array("bali", $wisata) ? "checked" : ""; ?>>Bali
					<input type="checkbox" name="tempat_wisata[]" value="tanjung_selor" <?php echo in_array("tanjung_selor", $wisata) ? "checked" : ""; ?>>Tanjung Selor
					<input type="checkbox" name="tempat_wisata[]" value="jakarta" <?php echo in_array("jakarta", $wisata) ? "checked" : ""; ?>>Jakarta
					<input type="checkbox" name="tempat_wisata[]" value="lombok" <?php echo in_array("lombok", $wisata) ? "checked" : ""; ?>>Lombok
				</td>
			<tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>
					<input type="date" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']?>">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="submit">
				</td>
			</tr>
		</form>
		
	</table>
	

</body>
</html>