<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>bài tập về thời gian</title>
</head>
<body>
<div class="xuattime">
<?php 
$arrVN=['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ nhật'];
$arrEn=['Mon', 'Tues', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
$result=date('h:i A D,\n\g\à\y d-m-Y', time());
// $result=str_replace(',', ', ngày', $result);
$result=str_replace($arrEn, $arrVN, $result);
echo $result;
 ?>
</div>
<div class="namnhuan">
	<?php 
	$year=range(2000,2020);
	function boxdata($arrdata, $name, $checkSelected){
		$strdate='';
		if(!empty($arrdata))
		{
			$strdate.='<select name="'.$name.'">';
			foreach($arrdata as $key=>$value)
			{
				if($value==$checkSelected)
				{
					$strdate.='<option value="'.$value.'" selected=true>'.$value.'</option>';
				}else{
					$strdate.='<option value="'.$value.'">'.$value.'</option>';
				}
			}
			$strdate.='</select>';
		}
		return $strdate;
	}

	$checkyear=(isset($_POST['year']))?$_POST['year']:0;
	$box=boxdata($year, 'year', $checkyear);

	?>
	<form action="#" method="POST">
		<?php echo $box; ?>
		<input type="submit" value="checknhuan">
		<p>nguoi dung da nhap: 		<?php 	
		echo $checkyear;	
		if(checkdate(2,29, $checkyear))
{
	echo 'Là năm nhuận';
}else{
	echo 'Không là năm nhuận';
} ?>
	
</p>

	</form>

</div>
<div class="monthhavedate">

	<?php
	function box($array,$name, $datacheck)
	{
		$result='';
		if(!empty($array))
		{
			$result.='<select name="'.$name.'">';
			foreach($array as $key=>$value)
			{
				if($value==$datacheck)
				{
					$result.='<option value="'.$value.'" selected=true>'.$value.'</option>';
				}else{
					$result.='<option value="'.$value.'">'.$value.'</option>';
				}
			}
			$result.='</select>';
		}
		return $result;
	}
	$yearh=range(2000, 2020);
	$monthh=range(1,12);
	$year=(isset($_POST['year']))?$_POST['year']:0;
	$month=(isset($_POST['month']))?$_POST['month']:0;
	$boxyear=box($yearh, 'year', $year);
	$boxmonth=box($monthh, 'month', $month);
	
	 ?>
	 <form action="#" method="POST">
	 	<p><?php echo $boxmonth ?></p>
	 	<p><?php echo $boxyear ?></p>
	 	<input type="submit" value="so ngày">
	 	<?php 
	 		$timestamp=mktime(0,0,0,$month, 1, $year);
	$totalDays=date('t', $timestamp);
	echo $totalDays;
	 	?>
	 </form>
</div>
<br>
<div class="timestamp">
	<?php 
	$timePost='26/11/2016 16:06:05';
	$timeReply='28/11/2016 18:08:06';
	$arrPost=date_parse_from_format('d/m/Y H:i:s', $timePost);
	$arrReply=date_parse_from_format('d/m/Y H:i:s', $timeReply);
	$tsPost=mktime($arrPost['hour'], $arrPost['minute'], $arrPost['second'], $arrPost['month'], $arrPost['day'], $arrPost['year']);
	$tsReply=mktime($arrReply['hour'], $arrPost['minute'], $arrPost['second'], $arrPost['month'], $arrPost['day'], $arrPost['year']);
	$interval=$tsReply-$tsPost;
	$result='';
	switch($interval){
		case $interval<60:
		$result=($interval==1)?$interval.' second ago': $interval.' seconds ago';
		break;
		case ($interval>=60&& $interval<3600):
		$minute=round($interval/60);
		$result=($minute==1)?$minute.' minute ago':$minute.' minute ago';
		break;
		case ($interval>=3600&&$interval<86400):
		$hour=round($interval/3600);
		$result=($hour==1)?$hour.' hour ago': $hour.' hours ago';
		break;
		case (round($interval/86400)==1):
		$result='Yesterday at'.date('H:i:s', $tsReply);
		break;
}
echo $result;
	 ?>
</div>
</body>
</html>