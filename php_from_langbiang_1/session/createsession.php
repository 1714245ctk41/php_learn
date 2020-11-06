<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
session_start();
$_SESSION['name']='Trần Văn Hoàng';

	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';
	if(isset($_SESSION['age'])){
		$_SESSION['age']=30;
	}else $_SESSION['age']=20;
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';
?>
</body>
</html>