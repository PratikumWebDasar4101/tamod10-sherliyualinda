<?php  
require_once 'Koneksi.php';
$kon = new Koneksi();
session_start();
$id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>6701174057</title>
</head>
<body>
	<h3>PROFILE ANDA</h3>
	<table>
		<?php 
		$query = "SELECT * FROM user WHERE id = '$id'";
		$result = mysqli_query($kon->conn(), $query);
		$d = mysqli_fetch_array($result);
		?>
		<tr>
			<td>Username : </td>
			<td>
				<?php echo $d['username']; ?>
			</td>
		</tr>
		<form action="prosesEditProfile.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
			<tr>
				<td>Ganti Password : </td>
				<td>
					<input type="password" name="new_password">
				</td>
			</tr>
			<tr>
				<td>Konfirmasi Password : </td>
				<td>
					<input type="password" name="konfirmasi_new_password">
				</td>
			</tr>
			<tr>
				<td>Password Lama : </td>
				<td>
					<input type="password" name="old_password">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Submit">
				</td>
			</tr>
		</form>
		<tr>
			<td colspan="2"><a href="logOut.php">Logout</a></td>
		</tr>
	</table>
</body>
</html>