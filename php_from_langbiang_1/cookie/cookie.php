<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
echo 'Xin chào'.'<br>';

if(isset($_COOKIE['lastlogin'])){
	$time=$_COOKIE['lastlogin'];
	echo 'Last login: '.date('d/m/Y H:i:s', $time);
	setcookie('lastlogin', time());
}else{
	setcookie('lastlogin', time(), time()+3600);
}
?>
</body>
</html>