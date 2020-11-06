<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>select box</title>
</head>
<body>
<div class="content">
<?php 
	$group = ['1'=>'Admin', '2'=>'Manager', '3'=>'Member', '4'=>'Guest'];
	$xhtml = '';
	if (!empty($group)) {
		$xhtml .='<select name="group" id="group" style="width:200px">';
		foreach ($group as $key=>$value) {
			if ($key =='3') {
				$xhtml.='<option value="'.$key.'" selected="selected">'.$value.'</option>';
			}else {
				$xhtml.='<option value="'.$key.'">'.$value.'</option>';
			}
		}
		$xhtml.='</select>';
	}
	echo $xhtml;
	$group = ['1'=>'Admin', '2'=>'Manager', '3'=>'Member', '4'=>'Guest'];
	$city = ['ct'=>'Cần Thơ', 'hg'=>'Hậu Giang', 'bt'=>'Bến Tre'];
	function createSelectbox($name, $attributes, $array, $keySelect){
		$xhtml ='';
		if (!empty($array)) {
			$xhtml.='<select name="'.$name.'" id="'.$name.'" style="'.$attributes.'">';
			foreach ($array as $key=>$value) {
				if ($key == $keySelect) {
					$xhtml.='<option value="'.$key.'" selected="selected">'.$value.'</option>';
				}else {
					$xhtml.='<option value="'.$key.'">'.$value.'</option>';
				}
			}
			$xhtml.='</select>';
		}
		return $xhtml;
	}
	$groupSelect= createSelectbox('group', 'width:200px', $group, 4);
	$citySelect = createSelectbox('city', 'width:300px', $city, 'hg');
	echo '<br>'.$groupSelect;
	echo '<br>';
	echo $citySelect;
?>
</div>
<?php 

?>
</body>
</html>