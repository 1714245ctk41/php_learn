<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>form</title>
</head>
<body>
<?php
$number1='';
$number2='';
$calculate='';
$flag=false;
$result='';
if(isset($_POST['typeSubmit'])&& $_POST['typeSubmit']!='Xóa')
{
	if(isset($_POST['number1'])&& isset($_POST['number2'])&& isset($_POST['calculate']))
	{
		$number1=$_POST['number1'];
		$number2=$_POST['number2'];
		$calculate=$_POST['calculate'];
		if(is_numeric($number1)&& is_numeric($number2)){
			$flag=true;
			switch($calculate)
			{
				case '+':$result=$number1+$number2;
				break;
				case '-';$result=$number1-$number2;
				break;
				case '*';
				$result=$number1*$number2;
				break;
				case'/':
				$result=$number1/$number2;
				break;
				default:
				$result="Du Lieu khong hop le";
				break;
			}
		}else{
			$result="Du lieu khong hop le";
			$flag-false;
			break;
		}
	}
	else{
		$falg=false;
	}
}
?>
  <div class="content">
    <h1>Mô phỏng máy tính điện tử</h1>
    <form action="#" method="post">
      <label>Số thứ nhất</label>
      <input type="text" name="number1" value="<?php echo $number1; ?>"><br>
      <label>Phép toán</label>
      <input type="text" name="calculate" value="<?php echo $calculate; ?>"><br>
      <label>Số thứ hai</label>
      <input type="text" name="number2" value="<?php echo $number2; ?>"><br>
      <label></label>
      <input type="submit" name="typeSubmit" value="Xem kết quả">
      <input type="submit" name="typeSubmit" value="Xóa">
    </form>
    <p>
      <?php
      if ($flag) {
        echo 'Kết quả: ' . $number1 . ' ' . $calculate . ' ' . $number2 . ' = ' . $result;
      } else {
        echo $result;
      }
      ?>
    </p>
  </div>
</body>
</html>