<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>chomsao</title>
</head>
<body>
<?php
$date='';
$month='';
$flag=true;
$result='';
$time='';
$name='';
$image;
if(isset($_POST['typeSubmit']) && $_POST['typeSubmit']!="Xoa")
{
	if(isset($_POST['date'])&& isset($_POST['month'])){
		$day=$_POST['date'];
		$month=$_POST['month'];
		if(is_numeric($day) && is_numeric($month))
		{
			$flag=true;
			switch($month){
				case '1':
				if($day<1||$day>31){$flag=false; break;}
				if($day<=19){$image='capricorn';$name='Ma ket'; $time='20/01-10/02';}
				break;
				case '2':
				if($day<1||$day>29){$flag=false;break;}
				if($day<=19){$image='aquarius'; $name='bao binh'; $time='20/01-19/02';}
				if($day>=20){$image='pisces'; $name="Song ngu"; $time='20/02-21/03';}
				break;
				default:
				$flag=false;
				break;
			}
		}else{
			$flag=false;
		}
	}
	if($flag)
	{
		$result='<div class="result">
		<div class="img">
		<img src="images/'.$image.'.jpg" alt=" '.$image.'">
		</div>
		<div class="text">
		<span>'.$name.'('.ucfirst($image).': '.$time.')</span>
		</div>
		</div>';
	}else{
		$result='<div class="text">Du lietu khong hop le</div>';
	}
}


?>

	<div class="contain">
		<h1>Ban thuoc chom sao gi</h1>
		<form action="#" method="post">
		<label for="">Ngay sinh: </label>
		<input type="text" name="date" value="<?php echo $date; ?>">
		<label for="">Thang sinh: </label>
		<input type="text" name="month" value="<?php echo $month; ?>">
		<input type="submit" name="typeSubmit" value="Lay chom sao"></form>
		<?php echo $result;?>
	</div>
</body>
</html>