<?php
/**
 * 
 */
class Koneksi
{
	private $host;
	private $username;
	private $password;
	private $db;	
	function __construct()
	{
		$this->host ='localhost';
		$this->username ='root';
		$this->password ='';
		$this->db='ta_10';
	}
	public function conn ()
	{
		$konek = mysqli_connect($this->host,$this->username,$this->password,$this->db) or die(mysql_error());		
		return $konek;
	}
}

?>