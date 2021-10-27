<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>chomsao</title>
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
		}
		.content {
			width: 600px;
			height: 350px;
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
		label,
		input {
			padding: 5px;
			margin: 10px 0;
			font-size: 16px;
			font-weight: bold;
		}
		.result {
			width: 400px;
			height: 100px;
			margin: 0 auto;
		}
		.image {
			margin-left: 20px;
			margin-top: 20px;
			border-radius: 100%;
			width: 50px;
			height: 50px;
			overflow: hidden;
			display: inline-block;
			float: left;
		}
		.text {
			padding-top: 40px;
			margin-left: 80px;
			width: 300px;
			height: 100%;
			font-size: 20px;
			font-weight: bold;
			color: red;
			font-style: italic;
			display: block;
			height: 100px;
			box-sizing: border-box;
		}
	</style>
</head>
<body>
<?php 
	$day ='';
	$month = '';
	$result = '';
	$image = '';
	$name = '';
	$time = '';
	$flagshow = true;
	$result = '';
	if (isset($_POST['typeSubmit']) && $_POST['typeSubmit'] != 'Xóa') {
		if (isset($_POST['day']) && isset($_POST['month']))  {
			$day = $_POST['day'];
			$month = $_POST['month'];
			$flagshow = true;
			switch ($month) {
				case '1':
					if ($day <1 || $day>31 ) {
						$flagshow = false;break;
					}
					if ($day <=19) {
						$image = 'capricorn';
						$name = 'Ma kết'; 
						$time = "23/12 - 19/01";
					}
					if ($day>=20) {
						$image = "aquarius";
						$name = 'Bảo Bình';
						$time = '20/01-19/02';
					}
					break;
				case '2':
					if ($day <1|| $day>29) {
						$flagshow = false; break;
					}
					if ($day <=19) {
						$image = 'aquarius';
						$name = 'Bảo Bình';
						$time = '20/01 - 19/02';
					}
					if ($day >=20) {
						$image = 'pisces';
						$name = 'Song Ngư';
						$time = '20/02 - 21/03';
					}
					break;
				case '3':
				if ($day <1 || $day >31) {
					$flagshow = false;break;
				}
				if ($day <=20) {
					$image = 'pisces';
					$time = '19/02 - 20/03';
					$name = "Song Ngư";
				}
				if ($day > 20) {
					$image = 'Aries';
					$name = 'Bạch Dương';
					$time = '21/03- 19/04';
				}
				break;
				case '4':
				if ($day <1 || $day >30) {
					$flagshow = false;break;
				}
				if ($day < 20) {
					$image = 'Aries';
					$name = 'Bạch Dương';
					$time = '21/03- 19/04';
				}
				if ($day >= 20) {
					$image = 'Taurus';
					$name = "Kim Ngưu";
					$time = '20/04 - 20/05';
				}
				break;
				case '5':
				if ($day <1 || $day >31) {
					$flagshow = false; break;
				}
				if ($day <= 20 ) {
					$image = 'Taurus';
					$name = "Kim Ngưu";
					$time = '20/04 - 20/05';
				}
				if ($day >20 ) {
					$image = 'Gemini';
					$name = "Song Tử";
					$time = '21/05 - 21/06';
				}
				break;
				case '6':
				if ($day <1 || $day >30) {
					$flagshow = false;  break;
					
				}
				if ($day <= 21) {
					$image = 'Gemini';
					$name = "Song Tử";
					$time = '21/05 - 21/06';
				}
				if ($day >21 ) {
					$image = 'Cancer';
					$name = "Cự Giải";
					$time = '22/06 - 22/07';
				}
				break;
				case '7':
				if ($day <1 ||$day >31) {
					$flagshow = false; break;
				}
				if ($day <= 22) {
					$image = 'Cancer';
					$name = "Cự Giải";
					$time = '22/06 - 22/07';
				}
				if ($day >22) {
					$image = 'Leo';
					$name = "Hải Sư";
					$time = '23/07 - 22/08';
				}
				break;
				case '8':
				if ($day < 1|| $day >30) {
					$flagshow = false; break;
				}
				if ($day <= 22) {
					$image = 'Leo';
					$name = "Hải Sư";
					$time = '23/07 - 22/08';
				}
				if ($day >22) {
					$image = 'Virgo';
					$name = "Sữ Nữ";
					$time = '23/08 - 22/09';
				}
				break;
				case '9':
				if ($day <1 || $day >31) {
					$flagshow = false; break;
				}
				if ($day<= 22) {
					$image = 'Virgo';
					$name = "Sữ Nữ";
					$time = '23/08 - 22/09';
				}
				if ($day >22) {
					$image = 'Libra';
					$name = "Thiên Bình";
					$time = '23/09 - 23/10';
				}
				break;
				case '10':
				if ($day <1 ||$day >30) {
					$flagshow = false; break;
				}
				if ($day<= 23) {
					$image = 'Libra';
					$name = "Thiên Bình";
					$time = '23/09 - 23/10';
				}
				if ($day >23 ) {
					$image = 'Scorpius';
					$name = "Hổ Cáp";
					$time = '24/10 - 24/11';
				}
				break;
				case '11':
				if ($day <1 || $day >31) {
					$flagshow= false; break;
				}
				if ($day <= 21) {
					$image = 'Scorpius';
					$name = "Hổ Cáp";
					$time = '24/10 - 21/11';
				}
				if ($day >21) {
					$image = 'Sagittarius';
					$name = "Nhân Mã";
					$time = '22/11 - 21/12';
				}
				break;
				case '12':
				if ($day <1 ||$day >31) {
					$flagshow = false; break;
				}
				if ($day <= 21) {
					$image = 'Sagittarius';
					$name = "Nhân Mã";
					$time = '22/11 - 21/12';
				}
				if ($day >21) {
					$image = 'Capricorn ';
					$name = "Ma Kết";
					$time = '22/12 - 19/1';
				}
				break;
				default:
					$flagshow = false;
					break;
			}
		}else{
			$flagshow = false;
		}
	}
	if ($flagshow) {
		
?>
	<div class="result">
		<img src="images/<?php echo $image; ?>.jpg" >
		<p><?php echo $name;  ?><span>(<?php echo $image; ?>: <?php echo $time; ?>)</span></p>
	</div>
<?php
		
	}else{
		echo '<div class="text">Dữ liệu không hợp lệ</div>';
	}
?>
<div class="content">
	<h1>Lấy chòm sao</h1>
	<form action="#" method="POST">
		<label for="">Ngày sinh</label>
		<input type="number" name="day" value="<?php echo $day; ?>" max="31" min="1" size="40" autofocus><br>
		<label for="">Thánh sinh</label>
		<input type="number" name="month" value="<?php echo $month; ?>" max="12" min="1">
<br>		<label for=""></label>
		<input type="submit" name="typeSubmit" value="Lấy chòm sao">
		<input type="submit" name="typeSubmit" value="Xóa">
	</form>
	<?php echo $result; ?>
</div>
</body>
</html>