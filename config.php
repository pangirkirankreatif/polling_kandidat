<?php
	error_reporting(0);
	$server = "127.0.0.1";
	$username = "root";
	$password = "";	
	$database = "_db_polling_kandidat";
	mysql_connect($server,$username,$password) or die("Koneksi gagal ".mysql_error());
	mysql_select_db($database) or die("Database $database tidak bisa diakses");
?>
