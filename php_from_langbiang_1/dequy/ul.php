<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
$data=scandir('.');
echo '<pre>';
print_r($data);
echo '</pre>';
function showall($path, &$newstring)
{
	$data=scandir($path);
	$newstring.='<ul>';
	foreach($data as $key=>$value)
	{
		if($value!='.'&&$value!='..')
		{
			$dir=$path.'/'.$value;
			if(is_dir($dir)){
				$newstring.='<li>D: '.$value;
				showall($path, $newstring);
				$newstring.='</li>';
			}else{
				$newstring.='<li>F: '.$value.'</li>';
			}

		}
	}
	$newstring.='</ul>';
}
showall('.', $newstring);
echo $newstring;
echo '<hr>';
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

// function recursive($source, $parent, &$newString)
// {
// 	if(count($source)>0){
// 		$newString.='<ul>';
// 		foreach($source as $key=>$value)
// 		{
// 			if($value['parent']==$parent)
// 			{
// 				$value['name']='<a href="targetPage.php?targetID='.$value['id'].'">'.$value['name'].'</a>';
// 				$newString.='<li>'.$value['name'];
// 				unset($source[$key]);
// 				$newParent=$value['id'];
// 				recursive($source, $newParent, $newString);
// 				$newString.='</li>';
// 			}
// 		}
// 		$newString.='</ul>';
// 	}
// }
// recursive($menu, 0, $newString);

// echo $newString;
function newrecursion($source,$parent, &$newstring)
{
	if(count($source)>0)
	{
		$newstring.='<ul>';
		foreach($source as $key=>$value)
		{
			if($value['parent']==$parent)
			{$value['name']='<a href="targetPage.php?targetID='.$value['id'].'">'.$value['name'].'</a>';
						$newstring.='<li>'.$value['name'];
						unset($source[$key]);
						$newParent=$value['id'];
						newrecursion($source, $newParent, $newstring);
						$newstring.='</li>';}
		}
		$newstring.='</ul>';
	}
}
newrecursion($menu, 0, $newString);
$newString=str_replace('<ul></ul>', '', $newString);
echo $newString;
?>
</body>
</html>