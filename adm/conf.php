<?php
	$user = 'root';
	$pass= 'vegaspro23';
	$host = 'localhost';
	$db = 'elixia_db';

	$con = mysqli_connect($host,$user,$pass,$db);

	if(mysqli_connect_error()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>