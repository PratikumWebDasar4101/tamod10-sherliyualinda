<?php 
require_once 'Koneksi.php';
class User_model{
	private $kon;

	function __construct()
	{
		$koneksi = new Koneksi();
		$this->kon = $koneksi->conn();
	}

	public function user_registrasi($username,$password)
	{
		$query = "INSERT INTO `user`(`username`, `password`) VALUES ('$username','". md5($password) ."')";
		$query_success = mysqli_query($this->kon,$query);
		return $query_success;
	}

	public function user_login($username,$password)
	{
		$query = "SELECT `id`, `username`, `password` FROM `user` WHERE username = '$username' AND password = '". md5($password) ."'";
		$query_success = mysqli_query($this->kon,$query);
		return $query_success;
	}
}
?>