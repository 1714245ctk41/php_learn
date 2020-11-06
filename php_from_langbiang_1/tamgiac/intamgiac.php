<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>PHP</title>
 <style>
.contain{
	border:1px solid red;
	margin-bottom:50px;
text-align:center;

}
h1{
	margin:20px;
}
*{
	margin: 0;
	padding: 0;
}
.tam{
	width:100%;
	display:grid;
	grid-template-columns:auto auto auto;
	grid-column-gap:0px;

}
.tamgiac{
	border:1px solid green;
	width:200px;
	height:200px;
	padding-top:20px;
}
a{
	text-decoration:none;
	color:red;
}
.images a{
	margin-left:20px;
}
</style>
</head>
<body>
<?php
if(isset($_GET['type']))
{
	$type=$_GET['type'];
	$result='';
	switch($type){
		case '1':
		$i=1;
		while($i<=6)
		{
			$result.=str_repeat('*', $i)."<br>";
			$i++;
		} break;
		case '2':
		$i=6;
		while($i>=1)
		{
			$result.=str_repeat('*', $i)."<br>";
			$i--;
		} break;
		case '3':
		$i=1;
		while($i<=6)
		{
			$character=str_repeat('*', 2*$i-1);
			$result.=$character."<br>";
			$i++;
		} break;
		default:
		break;
	}
}
?>
<div class="contain">
	<h1>Ve tam giac</h1>
	<div class="tam">
	<div class="tamgiac"><a href="?type=1">TAMGIAC_Loai1</a><br><br><?php echo $result; ?></div>
	<div class="tamgiac"><a href="?type=2">TAMGIAC_Loai2</a><br><br>
		<?php echo $result; ?></div>
	<div class="tamgiac"><a href="?type=3">TAMGIAC_Loai3</a><br><br>
		<?php echo $result; ?></div></div>
	<div class="draw">

	</div>
</div>

<div class="images">
	<h1>Xem anh</h1>
	<a href="?show=0">Xem 1 hinh</a>
	<a href="?show=1">Xem toan bo</a>
	<div class="image">
		<?php
		$i=1;
		do{
			echo '<img src="img_'.$i.'.jpg">';
			$flag=0;
			if(isset($_GET['show'])){
				$flag=$_GET['show'];
				$i++;
			}
		}while($i<=4&&$flag);
		?>
	</div>
</div>
<div class="sochan">
	<?php
	$i=1;
	$n=0;
	for($i=1; $i<=20; $i++)
	{
		if($i%2!=0)
			continue;
		echo $i."<br>";
	}
	?>
</div>
</body>
</html>﻿