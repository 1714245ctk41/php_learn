<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>function</title>
</head>
<body>
<?php 
	function createBox(){
		echo '<div style="width:200px;height:300px;border:1px solid #0DD;float:left; margin-right:10px; text-align:center">';
		echo '<h1>Hàm trong PHP</h1>';
		echo '</div>';
	}
	function createBox_1($float){
		echo '<div style="width:200px;height:300px;border:1px solid #0DD;float:'.$float.'; margin-right:10px; text-align:center">';
		echo '<h1>Hàm trong PHP</h1>';
		echo '</div>';
	}
	createBox();
	createBox();
	createBox_1('right');
	function checkNumber(){
		$value=14;
		if ($value%2==0) {
			return true;
		}else return false;
	}
	$result = checkNumber();
	if ($result) {
		echo 'Số chẵn';
	}else echo 'Số lẻ';
	function checkNumber_1($value){
		if ($value%2==0) {
			return true;
		}else return false;
	}
	$globalVar =10;
	function testFunction(){
		echo '<br>'.$GLOBALS['globalVar'];
	}
	testFunction();

	$n1 = 2;
	$n2 = 3;
	function testFunction_1($n1, &$n2){
		$n1*=2;
		$n2*=2;
	}
	echo '<br><br> $n2 lúc đầu: '.$n2.'<br>';
	echo ' $n1 lúc đầu: '.$n1;
	testFunction_1($n1, $n2);
	echo '<br>'.'đây là tham số: '.$n1.'<br>';
	echo 'Đây là tham trị: '.$n2.'<br>';
?>
</body>
</html>