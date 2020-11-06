<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
session_start();
session_unset();
header('location:index.php');

?>
</body>
</html>