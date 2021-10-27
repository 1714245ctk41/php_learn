<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Máy tính điện tử</title>
	<style type="text/css">
		*{
			margin:0;
			padding:0;
		}
		.content {
			width: 600px;
			height: 300px;
			margin: 20px auto;
			border: 1px solid green;
		}
		h1 {
			text-align: center;
			padding: 10px 0;
			color: red;
		}
		label {
			display: inline-block;
			width: 100px;
			text-align: right;
		}
		label,input {
			padding: 5px;
			margin: 10px 0;
			font-size: 16px;
			font-weight: bold;
		}
		p {
			text-align: center;
			font-size: 20px;
			font-weight: bold;
			color: red;
			font-style: italic;
		}
	</style>
</head>
<body>
<?php 
	$number1='';
	$calculate='';
	$number2='';
	$result = '';
	$flag = false;
	if (isset($_POST['typeSubmit']) && $_POST['typeSubmit']!='Xóa') {
		if (isset($_POST['number1']) && isset($_POST['calculate']) && isset($_POST['number2'])) {
			$number1 = $_POST['number1'];
			$number2 = $_POST['number2'];
			$calculate = $_POST['calculate'];
			if (is_numeric($number1) && is_numeric($number2)) {
				$flag = true;
				switch ($calculate) {
					case '+':
						$result = $number1+$number2;
						break;
					case '-':
					$result = $number1 - $number2;
					break;
					case '*':
					$result = $number1* $number2;
					break;
					case '/':
					$result = $number1/$numbers;
					break;
					default:
						$result = 'Nhập dữ liệu không hợp lệ!';
						$flag = false;
						break;
				}
			}else{
				$flag = false;
			}
		}
	}
?>
<div class="content">
	<h1>Mô phỏng máy tính điện tử</h1>
	<form action = "#" method = "post">
		<label for="">Số thứ nhất: </label>
		<input type="number" name="number1" value="<?php echo $number1; ?>"><br>
		<label>Phép toán</label>
		<input type="text" name="calculate" value="<?php echo $calculate; ?>"><br>
		<label>Số thứ hai: </label>
		<input type="number" name="number2" value="<?php echo $number2; ?>"><br>
		<label for=""></label>
		<input type="submit" name="typeSubmit" value="Xem kết quả">
		<input type="submit" name="typeSubmit" value="Xóa">
	</form>
	<p>
		<?php  
			if ($flag) {
				echo 'Kết quả: '.$result;
			}else{
				echo $result;
			}
		?>
	</p>
</div>
</body>
</html>