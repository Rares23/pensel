<?php
	session_start();
	include "conf.php";

	$username = $_POST['username'];
	$password = $_POST['password'];

	$users = mysqli_query($con, "SELECT * FROM users");
 	while($row = mysqli_fetch_array($users)){
 		if($row['username'] == $username && $row['pass'] == $password){
 			$_SESSION['logged'] = true;
 		}
 	}


	if($_SESSION['logged'] == true) {
		header("Location: dashboard.php");
	} else {
		echo "Username or Password is incorrect!";
		session_destroy();
	}
?>