<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>function</title>
	<style>
		body{
			margin: 0;
			padding: 0;
		}
	</style>
</head>
<body>
<div class="content">
	<select name="group" id="group" style="width:200px">
		<option value="1">Admin</option>
		<option value="2">Manager</option>
		<option value="3" selected>Member</option>
		<option value="4">Guest</option>
	</select>
</div>
<hr>
<div class="content">
<?php
$group=['1'=>'Admin', '2'=>'Manager', '3'=>'Member', '4'=>'Guest'];
$city=['ct'=>'Cần Thơ', 'hg'=>'Hậu Giang', 'bt'=>'Bến Tre'];
function createSelect($name, $attribute, $array, $keySe)
{
	$xhtml='';
	if(!empty($array))
	{
		$xhtml.='<select name="'.$name.'" id="'.$name.'" select="'.$attribute.'">';
		foreach($array as $key=>$value)
		{
			if($key==$keySe)
			{
				$xhtml.='<option value="'.$key.'" selected="selected">'.$value.'</option>';
			}else{
				$xhtml.='<option value="'.$key.'">'.$value.'</option>';
			}
		}
		$xhtml.='</select>';
	}
	return $xhtml;
}
$cityS=createSelect('city', 'width:200px', $city, 'hg');
echo $cityS;
?>
</div>
</body>
</html>