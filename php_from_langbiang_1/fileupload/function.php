<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
function checksize($size, $min, $max){
	$flag=false;
	if($size>=$min&&$size<=$max)
		$flag=true;
	return $flag;
}
function randomCharacter($filename,$length=5){
	$ex=pathinfo($filename, PATHINFO_EXTENSION);
	$arrC=array_merge(range('A', 'Z'), range('a', 'z'), range(0,9));
	$arrC=implode($arr, '');
	$arrC=str_shuffle($arrC);
	$result=substr($arr, 0, $length);
	return $result;
}
function checkExtension($filename, $extension){
	$ext=pathinfo($filename, PATHINFO_EXTENSION);
	$flag=false;
	if(in_array(strtolower($ext), $extension)==true) $flag=true;
	return $flag;
}

?>
</body>
</html>