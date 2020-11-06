<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
session_start();
$image='img1 (1).jpg';
if(file_exists($image)){
	echo 'ton tai';
	$_SESSION['image']['info']=getimagesize($image);
	$_SESSION['image']['data']=file_get_contents($image);

}else echo 'khong ton tai';
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
?>

</body>
</html>