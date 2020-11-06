<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>number</title>
	<script>
		function refreshpage(){
			window.location.reload();
		}
	</script>
	<style>
		img{
			width:400px;
			height:200px;
		}
	</style>
</head>
<body>
<div class="containimg">
	<h1>Hình ảnh ngẫu nhiên</h1>
	<?php
	$number=rand(1,4);
	echo '<img src="img'.$number.'.jpg">';
	?>
	<a href="javascript:refreshpage()">Random image</a>
<br>
<form action="#" method="POST">
	<label for="">Tử số:</label><input type="number" value="4" name="num1"><br>
	<label for="">Mẫu số:</label><input type="number" value="12" name="num2">
	<input type="submit" value="tối giản">
</form>
	<?php
	$fraction=$_POST['num1'];
	$fraction1=$_POST['num2'];
	$sum=$fraction.'/'.$fraction1;
	$array=explode('/', $sum);
	$ts=$array[0];
	$ms=$array[1];
	function UCLN($n1, $n2){
		for($i=1; $i<=$n1; $i++)
		{	if($n1%$i==0)
						{$uclnn1[]=$i;}}
		for($i=1; $i<=$n2; $i++)
			{if($n2%$i==0)
							{$uclnn2[]=$i;}}
		$temp=array_intersect($uclnn1, $uclnn2);
		$result=max($temp);
		return $result;
	}
	$ucln=UCLN($ts, $ms);
	$ts/=$ucln;
	$ms/=$ucln;
	echo '<span>'.$ts.'/'.$ms.'</span>';
	?>
</div>
</body>
</html>