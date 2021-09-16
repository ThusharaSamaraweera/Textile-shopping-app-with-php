<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>home</title>
</head>
<body>
	<?php
	session_start();
	$name = $_SESSION['user_name'];
	echo 'Welcome '.$name;
	?>
</body>
</html>