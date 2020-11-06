<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
$menu=[];
$menu[]=['id'=>1, 'name'=>'Home', 'parent'=>0];
$menu[]=['id'=>2, 'name'=>'About', 'parent'=>0];
$menu[]=['id'=>3, 'name'=>'News', 'parent'=>0];
$menu[]=['id'=>4, 'name'=>'Products', 'parent'=>0];
$menu[]=['id'=>5, 'name'=>'Contact', 'parent'=>0];
$menu[]=['id'=>6, 'name'=>'Tin trong nước', 'parent'=>3];
$menu[]=['id'=>7, 'name'=>'Tin quốc tế', 'parent'=>3];
$menu[]=['id'=>8, 'name'=>'Công nghệ', 'parent'=>6];
$menu[]=['id'=>9, 'name'=>'Giáo dục', 'parent'=>6];
$menu[]=['id'=>10, 'name'=>'Y tế', 'parent'=>6];
$menu[]=['id'=>11, 'name'=>'Education', 'parent'=>7];
$menu[]=['id'=>12, 'name'=>'Breaking news', 'parent'=>7];
$menu[]=['id'=>13, 'name'=>'Software', 'parent'=>4];
$menu[]=['id'=>14, 'name'=>'Anti Virus', 'parent'=>4];
$menu[]=['id'=>15, 'name'=>'Nokia', 'parent'=>12];
$menu[]=['id'=>16, 'name'=>'Samsung', 'parent'=>13];
$menu[]=['id'=>17, 'name'=>'S1', 'parent'=>16];
$menu[]=['id'=>18, 'name'=>'S1.1', 'parent'=>17];

function recursive($source, $parent, $level, &$newArray){
	if(count($source)>0)
	{
		foreach($source as $key=>$value)
			{if($value['parent']==$parent)
						{	
							$value['level']=$level;
							$newArray[]=$value;
							unset($source[$key]);
							$newParent=$value['id'];
						recursive($source, $newParent, $level+1, $newArray);
						}}
	}
}
recursive($menu, 0, 1, $newArray);
echo '<pre>';
print_r($newArray);
echo '</pre>';
foreach($newArray as $key =>$value)
{
	if($value['level']==1)
	{
		echo '<div style="border: 1px solid gray">+ '.$value['name'].'</div>';
	}
	else{
		$padding=($value['level']-1)*20;
		echo '<div style="border:1px solid gray;padding-left: '.$padding.'px">- '.$value['name'].'</div>';
	}
}




// foreach($menu as $key=>$value)
// {
// 	if($value['parent']==0)
// 	{
// 		$value['level']=1;
// 		$newarr[]=$value;
// 		unset($menu[$key]);
// 		$parent=$value['id'];
// 		foreach($menu as $key1=>$value1)
// 		{
// 			if($value1['parent']==$parent)
// 			{
// 				$value1['level']=$value['level']+1;
// 				$newarr[]=$value1;
// 				unset($menu[$key1]);
// 				$parent1=$value1['id'];
// 				foreach($menu as $key2=>$value2)
// 				{
// 					if($value2['parent']==$parent1)
// 					{
// 						$value2['level']=$value1['level']+1;
// 						$newarr[]=$value2;
// 						unset($menu[$key2]);
// 						$parent2=$value2['id'];
// 						foreach($menu as $key3=>$value3)
// 						{
// 							if($value3['parent']==$parent2)
// 							{
// 								$value3['level']=$value2['level']+1;
// 								$newarr[]=$value3;
// 								unset($menu[$key3]);
// 							}
// 						}
// 					}
// 				}
// 			}
// 		}
// 	}
// }
// echo '<pre>';
// print_r($menu);
// echo '</pre>';


// foreach($newarr as $key=>$value)
// {
// 	if($value['level']==1)
// 	{echo '<div style="border:1px solid gray">+ '.$value['name'].'</div>';}
// else {
// 	$padding=($value['level'])*20;
// 	$padding='padding-left: '.$padding.'px;';
// 	echo '<div style="border:1px solid gray;'.$padding.'">- '.$value['name'].'</div>';
// }
// }

// $menu1[]=['id'=>1, 'name'=>'Home', 'parent'=>0, 'level'=>1];
// $menu1[]=['id'=>2, 'name'=>'About', 'parent'=>0, 'level'=>1];
// $menu1[]=['id'=>3, 'name'=>'News', 'parent'=>0, 'level'=>1];
// $menu1[]=['id'=>6, 'name'=>'Tin trong nước', 'parent'=>3, 'level'=>2];
// $menu1[]=['id'=>8, 'name'=>'Công nghệ', 'parent'=>6, 'level'=>3];
// $menu1[]=['id'=>9, 'name'=>'Giáo dục', 'parent'=>6, 'level'=>3];
// $menu1[]=['id'=>10, 'name'=>'Y tế', 'parent'=>6, 'level'=>3];
// $menu1[]=['id'=>7, 'name'=>'Tin quốc tế', 'parent'=>3, 'level'=>2];
// $menu1[]=['id'=>11, 'name'=>'Education', 'parent'=>7, 'level'=>3];
// $menu1[]=['id'=>12, 'name'=>'Breaking news', 'parent'=>7, 'level'=>3];
// $menu1[]=['id'=>15, 'name'=>'Nokia', 'parent'=>12, 'level'=>4];
// $menu1[]=['id'=>4, 'name'=>'Products', 'parent'=>0, 'level'=>1];
// $menu1[]=['id'=>13, 'name'=>'Software', 'parent'=>4, 'level'=>2];
// $menu1[]=['id'=>16, 'name'=>'Samsung', 'parent'=>13, 'level'=>3];
// $menu1[]=['id'=>17, 'name'=>'S1', 'parent'=>16, 'level'=>4];
// $menu1[]=['id'=>18, 'name'=>'S1.1', 'parent'=>17, 'level'=>5];
// $menu1[]=['id'=>14, 'name'=>'Anti Virus', 'parent'=>4, 'level'=>2];
// $menu1[]=['id'=>5, 'name'=>'Contact', 'parent'=>0, 'level'=>1
?>

<!-- function factorial($number){
	$result=1;
	if($number>1)
	{
		$result=$number*factorial($number-1);
	}
	return $result;
}
echo factorial(4); 
function total($number){
	$result=0;
	if($number>=1)
	{
		$result=total($number-1)+$number;
	}
	return $result;
}
echo total(3);-->
</body>
</html>