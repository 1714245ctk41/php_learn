<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
$variable='This is a string';
session_start();
$_SESSION['variable']=$variable;
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
$array=[['coutse'=>'Joomla', 'time'=>80], ['course'=>'Zend', 'time'=>100], ['course'=>'JQuery', 'time'=>120]];
session_start();
session_unset();
$_SESSION['array']=$array;

echo '<hr>';
session_destroy();

session_start();
$_SESSION['function']='<?php
function checkNumber($number){
	return ($number%2==0)?" la so chan": " la so le";
}
?>';
eval('?>'.$_SESSION['function']);
echo checkNumber(2);

echo '<hr>';

session_unset();

$_SESSION['file']='<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<h1>Hello you printed me</h1>
<?php
function checkNumber($number){
	return ($number%2==0)?" la so chan": " la so le";
}

?>
</body>
</html>';

eval('?>'.$_SESSION['file']);
echo checkNumber(2);
?>
</body>
</html>