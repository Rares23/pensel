<?php
	session_start();
	$_SESSION['logged'] = false;
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Elixia Admin</title>
	</head>
	<body>
		<?php
			include "log_form.php";
		?>
	</body>
</html>