<?php
	session_start();
	if($_SESSION['logged'] != true){
		header("Location: index.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Dashboard | Elixia</title>
	</head>
	<body>
		<h1>Elixia's Dashboard</h1>
		<a href="log_out.php">Logout</a>
	</body>
</html>