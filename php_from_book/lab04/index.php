<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
	if(isset($_POST['count'])){
		$num1=$_POST['num1'];
		$num2=$_POST['num2'];
		$operation=$_POST['operation'];
		switch($operation){
			case 'Addition':
				$results=$num1+$num2;
				break;
			case 'Subtraction':
				$results=$num1+$num2;
				break;
			case 'Multiplication':
				$results=$num1*$num2;
				break;
			case 'Division':
			$results=$num1/$num2;
		}
	}
?>
<div class="calculator">
	<h1 class="title">CALCULATOR</h1>
	<form method="post" action="index.php">
		<input type="text" name="num1" class="num" autocomplete="off" placeholder="Enter the first number">
		<input type="text" name="num2" class="num" autocomplete="off" placeholder="Enter the second number">
		<select name="operation" class="opt">
			<option value="Addition">+</option>
			<option value="Subtraction">-</option>
			<option value="Division">/</option>
			<option value="Multiplication">*</option>
		</select>
		<input type="submit" name="count" value="count" class="button">
	</form>
	<?php
		if(isset($_POST['count'])){	?>
			<input type="text" value="<?php echo $results; ?>" class="num">
	<?php } else {?>
		<input type="text" value="0" class="num">
	<?php }?>
</div>
</body>
</html>