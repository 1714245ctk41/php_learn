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
$result='<ul>';
foreach($data as $key=>$value)
{
	if($value!='.'&&$value!='..')
	{
		if(is_dir("./$value")){
		$result.='<li>D: '.$value.'<ul>';

		$datachild=scandir("./$value");
		foreach($datachild as $keyC=>$valueC)
		{
			if($valueC!='.'&&$valueC!='..')
			{if(is_dir('./$value/$valueC')){
							$result.='<li>D: '.$valueC.'</li>';
						}else{
							$result.='<li>F: '.$valueC.'</li>';
						}}
		}
		$result.='</ul></li>';

	}else{
		$result.='<li>F: '.$value.'</li>';
	}
	}
}
$result.='</ul>';
echo $result;
?>





<!-- php view permissions -->

<!-- // $file='test.txt';
	$data=scandir('.');
$result=[];
foreach($data as $key=>$value)
{
	if(is_dir($value))
	{
		if(preg_match('#es$#imsU', $value))
		{
			$result[]=$value;
		}
	}
}
echo '<pre>';
print_r($result);
echo '</pre>';
// $size=filesize($file);
// function findSize($size, $ditance=' ', $digit=2){
// 	$arr=['B','KB', 'MB', 'GB','TB'];
// 	$length=count($arr);
// 	for($i=1; $i<$length; $i++)
// 	{
// 		if($size>1024)
// 			$size/=1024;
// 		else{
// 			$unit=$arr[$i];
// 			break;
// 		}
// 	}
// 	$result=round($size, $digit).$ditance.$unit;
// 	return $result;
// }
// if(file_exists($file))
// {
// 	$result=findSize($size);
// 	echo $result;
// }else{
// 	echo 'file không tồn tại';
// } -->
</body>
</html>