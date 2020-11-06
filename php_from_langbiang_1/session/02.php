<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
session_start();
unset($_SESSION['image']['data']);

echo $session=session_encode();
session_unset();
echo '<pre>';
print_r($_SESSION);
echo'</pre>';
session_decode($session);
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
?>
</body>
</html>