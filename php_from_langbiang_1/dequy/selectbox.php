<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>selecbox</title>
</head>
<body>
<?php 
$menu=[];
$menu[]=['id'=>1, 'name'=>'Home', 'parent'=>0];
$menu[]=['id'=>2, 'name'=>'About', 'parent'=>0];
$menu[]=['id'=>3, 'name'=>'News', 'parent'=>0];
$menu[]=['id'=>6, 'name'=>'Tin trong nước', 'parent'=>3];
$menu[]=['id'=>8, 'name'=>'Công nghệ', 'parent'=>6];
$menu[]=['id'=>9, 'name'=>'Giáo dục', 'parent'=>6];
$menu[]=['id'=>10, 'name'=>'Y tế', 'parent'=>6];
$menu[]=['id'=>7, 'name'=>'Tin quốc tế', 'parent'=>3];
$menu[]=['id'=>11, 'name'=>'Education', 'parent'=>7];
$menu[]=['id'=>12, 'name'=>'Breaking news', 'parent'=>7];
$menu[]=['id'=>15, 'name'=>'Nokia', 'parent'=>12];
$menu[]=['id'=>4, 'name'=>'Products', 'parent'=>0];
$menu[]=['id'=>13, 'name'=>'Software', 'parent'=>4];
$menu[]=['id'=>16, 'name'=>'Samsung', 'parent'=>13];
$menu[]=['id'=>17, 'name'=>'S1', 'parent'=>16];
$menu[]=['id'=>18, 'name'=>'S1.1', 'parent'=>17];
$menu[]=['id'=>14, 'name'=>'Anti Virus', 'parent'=>4];
$menu[]=['id'=>5, 'name'=>'Contact', 'parent'=>0];

function recursive($source,$parent,  $level, &$newArray)
{
	if(count($source)>0)
	{
		foreach($source as $key=>$value)
		{
			if($value['parent']==$parent)
			{
				$value['level']=$level;
				$newArray[]=$value;
				$newParent=$value['id'];
				unset($source[$key]);
				recursive($source, $newParent, $level+1, $newArray);

			}
		}
	}
}
recursive($menu, 3, 1, $newArray);

?>


<?php 
function cmsSelectbox($source,$selected=0, $name, $style=null, $size="0")
{
$xhtml='<select name="'.$name.'" style="'.$style.'" size="'.$size.'">';
foreach($source as $key=>$value)
{
	$strSelected='';
	if($value['id']==$selected)
	{
		$strSelected='selected="selected"';
	}
	if($value['level']==1)
	{
		$xhtml.= '<option value="'.$value['id'].'"'.$strSelected.'>+ '.$value['name'].'</option>';
	}else{
		$name=str_repeat('&nbsp', ($value['id']-1)*5).'- '.$value['name'];
		$xhtml.= '<option value="'.$value['id'].'"'.$strSelected.'>'.$name.'</option>';
	}
}
$xhtml.='</select>';
return $xhtml;
}
echo cmsSelectbox($newArray,2, 'selectbox', 'min-width=200px; padding:3px', 5);


// <select name="selectbox" id="selectbox" style="min-width:200px;padding:3px;" size="15">
// foreach($newArray as $key=>$value)
// {
// 	if($value['level']==1){
// 	echo '<option value="'.$value['id'].'">+ '.$value['name'].'</option>';
// 	}else{
// 		$name=str_repeat('&nbsp', ($value['level']-1)*5).'-'.$value['name'];
// 		echo '<option value="'.$value['id'].'">'.$name.'</option>';
// 	}
// }
?>
</select>
</body>
</html>