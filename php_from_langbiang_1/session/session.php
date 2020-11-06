<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	session_start();
	session_destroy();
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';




	?>
</body>
</html>