<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>upload</title>
	<style>
		
	</style>
</head>
<body>
<?php 
require_once('function.php');
$configs=parse_ini_file('config.ini');

echo '<pre>';
print_r($configs);
echo '</pre>';
if(isset($_FILES['fileUpload']));{
	$fileUpload=$_FILES['fileUpload'];
	$fileUpload['name']=explode(':', $fileUpload['name']);
	foreach($fileUpload['name'] as $key=>$value){
$flagSize=checksize($fileUpload['size'][$key], $configs['min_size'], $configs['max_size']);
$flagExt=checkExtension($fileUpload['name'][$key], explode('|', $configs['extension']));
if($fileUpload['name']!=null&&$flagSize&&$flagExt){
	$fileNameTmp=$fileUpload['tmp_name'][$key];
	$random=randomString(5);
	$destination='./files/'.$random.'_'.$fileUpload['name'][$key];
	if(move_uploaded_file($fileNameTmp, $destination)){
		echo 'Upload succeeded';
	}else{
		echo 'upload failed';
	}
}
}}

?>

<!-- function randomString($length=5){
	$arrCharacter=array_merge(range('A', 'Z'), range('a','z'), range(0,9));
	$arrCharacter=implode($arrCharacter, '');
	$arrCharacter=str_shuffle($arrCharacter);
	$result=substr($arrCharacter, 0, $length);
	return $result;
}

$fileUpload=$_FILES['file-upload'];
if($fileUpload['name']!=null)
{
	$filename=$fileUpload['tmp_name'];
	$random=randomString(6);
	$destination='./files/'.$random.$fileUpload['name'];
	//move_uploaded_file($filename, $destination);
	if(copy($filename, $destination)){
		echo 'success';
	}
} -->
</body>
</html>