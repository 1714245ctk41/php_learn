<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
	'hop7' => '<div class="box1" style="border:2px solid #7CFC00"></div>',
	'hop8' => '<div class="box1" style="border:2px solid #FF00FF"></div>',
	'hop9' => '<div class="box1" style="border:2px solid #008080"></div>',
	'hop10' => '<div class="box1" style="border:2px solid #8B5A00"></div>'];
	$am_merge = array_merge($arraymain, $arraymain2);
	echo '<br>Lấy phần tử mảng bẳng con trỏ:<br>';
	$cursor = next($am_merge);
	while($cursor){
		echo $cursor;
		$cursor = next($am_merge);
	}
	echo '<br> Đảo ngược mảng bằng con trỏ.<br>';
	$cursor = end($am_merge);
	while($cursor){
		echo $cursor;
		$cursor = prev($am_merge);
	}
	echo '<br>Để chuyển đổi một mảng (chuỗi hoặc đối tượng) về một chuỗi đặc biệt để lưu vào cơ sở dữ liệu, sử dụng hàm serialize($value).<br>';
	$things = [
		'mon' => 'Monday',
		'tue' => 'Tuesday',
		'web' => 'Wednesday',
		0=>'table',
		1 =>'book'
	];
	$result = serialize($things);
	echo $result;
	echo '<br> Chuyển lại thành mảng<br>';
	$result = unserialize($result);
	while (list($key, $value)  = each($result)) {
		echo $value;
	}
	echo '<br>Hàm range(v1, v1, v3):<br>';
	$array_range = range(0, 20, 2);
	while($ex = each($array_range)){
		echo $ex['value'];
	}
	echo '<br>tạo mảng từ 2 mảng, có một mảng đóng vai trò là key, còn lại là value - array_combine()<br>';
	$ab_combine = array_combine($arraymain, $arraymain2);
	while ($ex = each($ab_combine)) {
		echo $ex['key'].' - '.$ex['value'].' || ';
	}
	$array_range_1 = range(0, 20);
	echo '<br>Sử dụng array_diff(): ';
	$array_range_match = array_diff($array_range_1, $array_range);
	foreach ($array_range_match as $value) {
		echo $value.' ';
	}
	echo '<br> chuyển khóa thành values và ngược lại: <br>';
	$ab_combine_keys = array_keys($ab_combine);
	$ab_combine_values = array_values($ab_combine);
	$ab_combine_kv = array_combine($ab_combine_values, $ab_combine_keys);
	while ($ex = each($ab_combine_kv)) {
		echo $ex['key'].' - '.$ex['value'].' | ';
	}
	echo '<br> Hoán đổi key values bẳng array_flip()<br>';
	$array_flip = array_flip($ab_combine);
	while(list($key, $value) = each($array_flip))
	{
		echo $key.' - '.$value.' | ';
	}
	echo '<br>Sử dụng array_walk()<br>';
	function nhan(&$value, $key, $param=2){
		 $value*=$param;
	}
	array_walk($array_range_1, "nhan", 5);
	foreach ($array_range_1 as $value) {
		echo $value.' ';
	}
	function checkNumber($number){
		$result = ($number % 2==0)? 'chẵn': 'lẻ';
		return $result;
	}
	$checksochanle = array_map('checkNumber', $array_range_1);
	while ($ex  = each($checksochanle)) {
	    echo $ex['value'];
	}
	function checknhan($n1, $n2){
		$result = $n1*$n2;
		return $result;
	}
	$array_range_2 = range(0,20,3);
	echo '<br>';
	$checknhanso = array_map('checknhan', $array_range_2, $array_range_1);
	while($ex = each($checknhanso)){
		echo $ex['value'].' ';
	}
	echo '<br>Sử dụng array_slice<br>';
	$array_slice = array_slice($array_range_2, 3, 1);
	echo $array_slice[0].' | ';
	echo '<br>Sử dụng array_splice(): ';
	$array_splice = array_splice($array_range_2, 2, 3, $arraymain['box2']);
	while ($ex = each($array_range_2)) {
	    echo $ex['value'].' ';
	}

	?>
</body>
</html>