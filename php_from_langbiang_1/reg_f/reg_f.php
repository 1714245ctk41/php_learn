<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>reg</title>
</head>
<body>
<?php 
$data=file_get_contents('http://dantri.com.vn/giao-duc-khuyen-hoc.htm') or die('Khong doc duoc du lieu');
$pattern='/class="mt3 clearfix eplcheck">.*src="(.*)".*class="fon6".*>(.*)<.*fon5 wid324 fl">.*(.*)</ismU';
preg_match_all($pattern, $data, $matches);

echo '<pre>';
print_r($matches);
echo '</pre>';
?>
</body>
</html>
