
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array</title>
	<style>
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
		'box0' => '<div class="box"></div>',
		'box1' => '<div class="box"></div>',
		'box2' => '<div class="box" style="border:2px solid #FF66FF"></div>',
		'box2' => '<div class="box" style="border:2px solid #FF66FF"></div>',
		'box3' => '<div class="box" style="border:2px solid #00FFFF"></div>',
		'box4' => '<div class="box" style="border:2px solid #00FFFF"></div>',
		'box5' => '<div class="box" style="border:2px solid #00FFFF"></div>',
		'box6' => '<div class="box" style="border:2px solid #00FF00"></div>',
		'box7' => '<div class="box" style="border:2px solid #00FF00"></div>',
		'box8' => '<div class="box" style="border:2px solid #3366CC"></div>',
		'box9' => '<div class="box" style="border:2px solid #3366CC"></div>',
		'box10' => '<div class="box" style="border:2px solid #3366CC"></div>',
	]; 
	$am_values= array_values($arraymain);
	foreach ($arraymain as $key=>$value) {
		echo $value;
	}
	echo '<br>';
	// unset($arraymain);
	$am_unique = array_unique($arraymain);
	foreach ($am_unique as $value) {
		echo $value;
	}
	echo '<br><p>Đảo ngược mảng sử dụng array_pop()';
	$i = count($arraymain);
	while ($i) {
	    echo array_pop($am_unique);
	    $i--;
	}
	echo '<br><p>thêm mảng bằng array_unshift() và array_push()</p>';
	echo array_push($arraymain, '<div class="box" style="width:100px"></div>');
	echo array_unshift($arraymain, '<div class="box" style="width:100px;border: 2px solid yellow"></div>');
	while (list($key, $values) = each($arraymain)) {
	    echo $values;
	}
	echo '<br>Đảo ngược mảng: array_reverse()<br>';
	$am_reverse = array_reverse($arraymain);
	while ( $valuebox = each($am_reverse)) {
	    echo $valuebox['value'];
	}
	echo '<br>hoán đổi key và value: array_flip().<br>';
	$am_flip = array_flip($arraymain);
	while (list($box, $vbox) = each($am_flip)) {
	    echo $box;
	    echo $vbox;
	}
	echo '<br> Tính tổng array_sum()';
	$arrayNumber = ['so1'=>1, 'so2'=>19,'so3'=>5,'so4'=>11,'so5'=>13,'so6'=>10,'so7'=>2];
	echo '<br>'.array_sum($arrayNumber);
	echo '<br> Tìm max trong mảng: max() : '.max($arrayNumber);
	echo '<br>Tìm min trong mảng: min() : '.min($arrayNumber);
	echo '<br>Đếm sổ lần xuất hiện của các phần tử trong mảng - array_count_values()<br>';
	$am_countvalues = array_count_values($arraymain);
	while (list($key, $value) = each($am_countvalues)) {
	    echo $key.' : '.$value.' | ';
	}
	 $arraymain2 = ['box0' => '<div class="box"></div>',
		'hop1' => '<div class="box1"></div>',
		'hop2' => '<div class="box1" style="border:2px solid #FF66FF"></div>',
		'hop2' => '<div class="box1" style="border:2px solid #FF66FF"></div>',
		'hop3' => '<div class="box1" style="border:2px solid #00FFFF"></div>',
		'hop4' => '<div class="box1" style="border:2px solid #00FFFF"></div>'];
	echo '<br>kết hợp mảng: array_merge()'.'<br>';
	$am_merge = array_merge($arraymain, $arraymain2);
	while ($ex = each($am_merge)) {
	    echo $ex['value'];
	}
	echo '<br>Tìm giá trị theo select: array_search()<br>';
		shuffle($arraymain2);
		$value = array_search($arraymain2[0], $am_merge);
		echo $am_merge[$value];
	echo '<br> Lấy ngẫu nhiên chỉ sồ key: array_rand()<br>';
	if (isset($_POST['submit'])) {
		$am_rand = array_rand($am_merge, 5);
		while ($ex = each($am_rand)) {
		    echo $am_merge[$ex['value']];
		}
	
		
	}
?>
<form method='POST' action='#'>
	<!-- <select name="tim">
		<option value="<?php echo $arraymain['box0']; ?>">box1</option>
		<option value="<?php echo $arraymain['box1']; ?>">box2</option>
		<option value="<?php echo $arraymain['box2']; ?>">box3</option>
		<option value="<?php echo $arraymain['box3']; ?>">box2</option>
		<option value="<?php echo $arraymain2[0]; ?>">hop1</option>
		<option value="<?php echo $arraymain2[1]; ?>">hop2</option>
		<option value="<?php echo $arraymain2[2]; ?>">hop3</option>
		<option value="<?php echo $arraymain2[3]; ?>">hop4</option>
		<option value="<?php echo $arraymain['box4']; ?>">box5</option>
		<option value="<?php echo $arraymain['box6']; ?>">box7</option>
	</select> -->
	<input type="submit" name="submit">
	<h1><a href="Array_manually_1.php">Phần 2</a></h1>
</form>
<hr>
</body>
</html>
<?php 
	$things = ['mon'=>'Monday','tue'=>'Tuesday','web'=>'Wednesday', 0=>'table', 1=>'book'];
	$newArray = array_values($things);
	echo '<pre>';
	print_r($newArray);
	echo '</pre>';
	$lastItem = array_pop($newArray);
	echo 'phần tử cuối: '.$lastItem.'<br>';
	
	$firstItem = array_shift($newArray);
	echo 'phần tử đầu: '.$firstItem.'<br>';
	echo '<pre>';
	print_r($newArray);
	echo '</pre>';
?>