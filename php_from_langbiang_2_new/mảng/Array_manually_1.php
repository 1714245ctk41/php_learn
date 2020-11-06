<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mảng</title>
	<style type="text/css">
		.box{
			height:20px;
			width: 50px;
			border:2px solid #FF3333;
			border-radius: 5px;
			margin:5px;
			display:inline-block;
		}
		.box1{
			height:50px;
			width: 10px;
			border:2px solid #FF3333;
			border-radius: 5px;
			margin:5px;
			display:inline-block;
		}
	</style>
</head>
<body>
	<?php 
	$arraymain = [
		'box0' => '<div class="box"></div>|',
		'box1' => '<div class="box"></div>|',
		'box2' => '<div class="box" style="border:2px solid #FF66FF"></div>|',
		'box2' => '<div class="box" style="border:2px solid #FF66FF"></div>|',
		'box3' => '<div class="box" style="border:2px solid #00FFFF"></div>|',
		'box4' => '<div class="box" style="border:2px solid #00FFFF"></div>|',
		'box5' => '<div class="box" style="border:2px solid #00FFFF"></div>|',
		'box6' => '<div class="box" style="border:2px solid #00FF00"></div>|',
		'box7' => '<div class="box" style="border:2px solid #00FF00"></div>|',
		'box8' => '<div class="box" style="border:2px solid #3366CC"></div>|',
		'box9' => '<div class="box" style="border:2px solid #3366CC"></div>|',
		'box10' => '<div class="box" style="border:2px solid #3366CC"></div>',
	]; 
	$arraymain2 = ['box0' => '<div class="box"></div>',
	'hop1' => '<div class="box1"></div>',
	'hop2' => '<div class="box1" style="border:2px solid #FF66FF"></div>',
	'hop2' => '<div class="box1" style="border:2px solid #FF66FF"></div>',
	'hop3' => '<div class="box1" style="border:2px solid #00FFFF"></div>',
	'hop4' => '<div class="box1" style="border:2px solid #F4A460"></div>',
	'hop5' => '<div class="box1" style="border:2px solid #FFC125"></div>',
	'hop6' => '<div class="box1" style="border:2px solid #0000FF"></div>',
	'hop7' => '<div class="box1" style="border:2px solid #7CFC00"></div>'];
	$am_merge = array_merge($arraymain, $arraymain2);
	function shuffle_echo(){
	
	shuffle($GLOBALS['am_merge']);
	while (list($key, $value) = each($GLOBALS['am_merge'])) {
			echo $value;
		}
	}
	shuffle_echo();
	echo '<br>sử dung array_key_exists($key, $arr) và in_array($value, $arr):';
	$am_key = array_rand($am_merge, 1);
	if (array_key_exists($am_key, $am_merge)) {
		echo '<br>'.$am_merge[$am_key].' || ';
	}
	if (in_array($am_merge[$am_key], $am_merge)) {
		echo $am_merge[$am_key];
	}
	$arrayNumber = ['so1'=>'abcd', 'so2'=>'monday','so3'=>'hello world','so4'=>'buffalo','so5'=>'monkeyday','so6'=>'tuesday','so7'=>'thursday'];
	echo '<br>';

	$an_key_upper = array_change_key_case($arrayNumber, CASE_UPPER);
	foreach ($an_key_upper as $key=>$value) {
		echo $key.' - '.$value.' | ';
	}
	echo '<br>';
	$an_key_lower = array_change_key_case($an_key_upper, CASE_LOWER);
	while (list($key, $value) = each($an_key_lower)) {
	    echo $key.' - ';
	
}	echo '<br> chuyển mảng thành chuỗi: implode()';
	$strarr= implode(' ', $arraymain);
	echo '<br>'.$strarr ;
	echo '<br>dãn chuỗi thành mảng explode<br>';
	$arrstr = explode('|', $strarr);
	echo htmlspecialchars($strarr);
	echo '<pre>';
	print_r($arrstr);
	echo '</pre>';
	while(list($key, $value) = each($arrstr)){
		echo $value;
	}

	?>
	<h1><a href="Array_manually_2.php">
		phần 3
	</a></h1>
</body>
</html>