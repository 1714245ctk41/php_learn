<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
$emil="1714245ctk41@l.c";
if(filter_var($emil, FILTER_VALIDATE_EMAIL)){
	echo $emil.' la dia chi email';
}
echo '<hr>';
$value=23.32;
if(filter_var($value, FILTER_VALIDATE_FLOAT)){
	echo $value.' la gia tri float';
}
echo '<hr>';
$value=23;
if(filter_var($value, FILTER_VALIDATE_INT))
{
	echo $value.' la so nguyen';
}
echo '<hr>';
$value=6;
$int_option=["options"=>["min_range"=>5, "max_range"=>10]];
if(filter_var($value, FILTER_VALIDATE_INT, $int_option)){
	echo $value.' La int';
}
echo '<hr>';
$value='127.0.0.1';
if(!filter_var($value, FILTER_VALIDATE_IP)){
	echo $value.' khong la IP';
}
echo '<hr>';
$value='http://www.zend.vn';
if(!filter_var($value, FILTER_VALIDATE_URL))
{
	echo $value.'Khong la url';
}
echo '<hr>'.'function in phpfilter dang filter'.'<br>';
$variable='Nguyen Van A';
function converString($str)
{
	$str=str_replace(' ','_', $str);
	return $str;
}
echo filter_var($variable, FILTER_CALLBACK, ['options'=>'converString']);
echo '<hr>'.'validate'.'<br>';
$number=67;
function checkNumber($number){
	$flag=false;
	if($number%2==0)
		$flag=true;
	return $flag;
}
if(filter_var($number, FILTER_CALLBACK, ['options'=>'checkNumber'])){
	echo $number.' La so chan';
}else echo $number.' La so le';
echo '<hr>';
$value='084-24-324.234233';
$options=['options'=>['regexp'=>'#^084-[0-9]{2}-[0-9]{3}\.[0-9]{6}$#']];
if(filter_var($value, FILTER_VALIDATE_REGEXP, $options))
{
	echo $value.' thoa man';
}else{
	echo $value.' Khong thoa man';
}
echo '<hr>';
$value='teo.png';
$options=['options'=>['regexp'=>'#\.(jpg|png|gif)$#']];
if(!filter_var($value, FILTER_VALIDATE_REGEXP, $options)){
	echo $value.' khong la dinh dang cho phep';
}else echo $value.' la dinh dang cho phep';
echo '<hr>'.'kiem tra gia tri nhap vao chi chua chu va so'.'<br>';
$value='sdf3_';
$options=['options'=>['regexp'=>'#^[a-zA-Z0-9_]+$#']];
if(!filter_var($value, FILTER_VALIDATE_REGEXP, $options)){
	echo $value.' Khong thoa man';
}
else echo $value.' thoa man';
?>
</body>
</html>