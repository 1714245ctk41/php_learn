<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>number manually</title>
	<style type="text/css">
		input, button{
			padding:5px;
			font-size:20px;
			border-radius: 5px;
			border:1px solid gray;
		}
		button{
			padding:5px 10px;
		}
		input:focus, button:focus{
			outline:none;
		}
	</style>
</head>
<body>
	<form action="#" method="post">
		<input type="text" name="number" size="40" autofocus>
		<button type="submit" name="submit">Test</button>
	</form>
<?php
	if (isset($_POST['number']) ) {
		$number = $_POST['number'];
		if (is_numeric($number)) {
				echo '<p>This is a Number</p>';
				if (is_string($number)) {
				echo '<p>This is string Number</p>';
				}else 
				if (is_float($number)) {
					echo '<p>This is Float Number</p>';
				}

		}else{
			echo '<p>This is not a number</p>';
		}
	}else{
		echo '<p>You haven\'t typed yet</p>';
	}
  $number_list='2,43,54,36,6,57,2,1000,2,1,6,547,7,54,7';
  $arrayNumber = explode(',',$number_list);

  echo '<p>Tổng giá trị trong mảng: array_sum(): '.array_sum($arrayNumber).'</p>';
  echo '<p> Giá trị lớn nhất, nhỏ nhất trong mảng: max(): '.max($arrayNumber).' - '.min($arrayNumber).'</p>';
  echo '<p>Dùng sort: '.sort($arrayNumber).'. Số lớn nhất nhỏ nhất tương ứng: '.$arrayNumber[count($arrayNumber)-1].' - '.$arrayNumber[0].'</p>';
  foreach ($arrayNumber as $value) {
    echo $value.' - ';
  }
  
  // $array = range(0,20,2);
  // while ($ex = each($array)) {
  //     echo $ex['value'];
  // }

  // $arrayNumber =[];
  // $i=0;
  // array_push($arrayNumber, 'haha');
  // array_push($arrayNumber, $_POST['number']);
  // while(list($key, $value) = each($arrayNumber)){
  //   echo $key.' - '.$value.' | ';
  // }
?>	
</body>
</html>