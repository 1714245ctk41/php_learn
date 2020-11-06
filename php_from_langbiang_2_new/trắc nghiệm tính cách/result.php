<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trắc nghiệm tính cách</title>
</head>
<body>
<?php 
	$data = file('questions.txt') or die('Cannot read flie');
	$point = 0;
	array_shift($data);
	foreach ($data as $key=>$value) {
		$tmpArr = explode('|', $value);
		$id = $tmpArr[0];
		@$point = $point + $_POST[$id];
	}
	// echo '<pre>'.print_r($point).'</pre>';
	$data = file('result.txt') or die('Cannot read file');
	array_shift($data);
	foreach ($data as $key=>$value) {
		$tmpArr = explode('|', $value);
		$min = $tmpArr[0];
		$max = $tmpArr[1];
		$content = $tmpArr[2];
		if ($point >= $min && $point <= $max) {
			$result = $content;
			break;
		}
	}
	
?>
<div class="content">
	<h1>Kết quả trắc nghiệm tính cách</h1>
	<p><b>Tổng số điểm của bạn là: </b><?php echo $point; ?></p><p style="margin-top:10px; text-align:justify;"><b>Kết quả trắc nghiệm của bạn: </b><?php echo $result; ?></p>
</div>
</body>
</html>