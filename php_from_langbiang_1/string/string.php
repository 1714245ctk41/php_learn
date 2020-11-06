<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>string</title>
</head>
<body>
<?php
$test='   nguyen van teo  ';
$str=trim($test);
$array=explode(' ', $str);
foreach($array as $key=>$value)
{
	if(trim('o',$value)==null)
		unset($array[$key]);
	echo $value;
}
$str=implode(' ', $array);
echo "<br>".$str."<br>";
function truncateString($str, $maxChars=50, $holder='...')
{
	$result=$str;
	if(strlen($str)>$maxChars){
		$result=substr($str, 0, $maxChars).$holder;
	}
	return $result;
}
$test1=" Hello World asdfsadfsdafdsafdsafdsfsd";
$result=truncateString($test1, 20);
echo $result;
$char=chr(56756);
echo "<br>".$char."<br>";
$str='name=teo&age=10';
parse_str($str);
echo $name.'<br>';
echo $age.'<br>';
$url='http://210.245.126.171/Music/NhacTre/TinhYeu_LyMaiTrang/wma32/06_BienTham_TinhYeu_LyMaiTrang.wma';
function getinfo03($str){
	$index=strripos($str, '/');
	$result=substr($str, $index+1);
	return $result;
}
$info=getinfo03($url);
$ainfo=explode('_', $info);
$result=[];
$result['id']=$ainfo[0];
$arrayType=explode('.', $ainfo[3] );
$result['type']=$arrayType[1];
$ainfo[3]=$arrayType[0];
function format($str){
	$result=$str[0];
	for($i=1; $i<strlen($str); $i++)
	{
		if(ctype_upper($str[$i]))
			$result.=' '.$str[$i];
		else
			$result.=$str[$i];
	}
	return $result;
}

$result['singer']=format($ainfo[3]);
$result['name']=format($ainfo[1]);
$result['album']=format($ainfo[2]);
foreach($result as $key=>$value)
{
	echo $key.': '.$value.'<br>';
}
$str='   nGuyenN    VAn     tEo   ';
function formatString($str, $type=null){
$str=strtolower($str);
$str=trim($str);
$array=explode(' ', $str);
foreach($array as $key=>$value)
{
	if(trim($value)==null)
		{unset($array[$key]);
				continue;}
		if($type=='danh-tu') $array[$key]=ucfirst($value);
}
$result=implode(' ', $array);

return $result;
}
echo $result=formatString($str, 'danh-tu');
echo '<br>'.'<b>Nguyen</b> Van Teo';
echo htmlspecialchars('<b>Nguyen</b> Van Teo');

$entity=get_html_translation_table();
echo '<pre>'.$entity.'<pre>'.'<br>';
$anumber=['0'=>'không',
'1'=>'một',
'2'=>'hai',
'3'=>'ba',
'4'=>'bốn',
'5'=>'năm',
'6'=>'sáu',
'7'=>'bảy',
'8'=>'tám',
'9'=>'chín'
];
?>
<p>nhập số có 3 chữ số</p>
<form action="#" method="POST">
	<input type="text" name="number">
	<input type="submit" value="read">
</form>
<?php
$number=$_POST['number'];
function readNumber3Digit($number, $dictionaryNumber, $readFull=true)
{
	$number=strval($number);
	$number=str_pad($number, 3, 0, STR_PAD_LEFT);
	echo $number;
	$digit_0=substr($number, 2, 1);
	$digit_00=substr($number, 1, 1);
	$digit_000=substr($number, 0, 1);
	$str_000=$dictionaryNumber[$digit_000].'trăm';
	$str_00=$dictionaryNumber[$digit_00].'mươi';
	if($digit_00==0){$str_00='linh';}
	if($digit_00==1){$str_00='mười';}
	$str_0=$dictionaryNumber[$digit_0];
	if($digit_00>1&&$digit_0==1){$str_0=' mốt';}
	if($digit_00>=1&&$digit_0==5){$str_0=' lăm';}
	if($digit_00>1&&$digit_0==0){$str_0=' ';}
	if($digit_00&&$digit_0==0){
		$str_0=' ';
		$str_00=' ';
	}
	if($readFull=false){
		if($digit_000==0){$str_000=' ';}
		if($digit_000==0&& $digit_00==0){$str_00=' ';}
	}
	$result=$str_000.$str_00.$str_0;
	return $result;
}
$result=readNumber3Digit($number, $anumber, false);
echo '<br>'.$result;
?>
<form action="#" method="POST">
	<input type="text" name="number">
	<input type="submit" value="read">
</form>
<?php
$dicNumbers=[1=>'một', 2=>'hai', 3=>'ba', 4=>'bốn', 5=>'năm', 6=>'sáu', 7=>'bảy', 8=>'tám', 9=>'chín'];
$dictUntis=[0=>'tỷ', 1=>'triệu', 2=>'nghìn', 3=>'đồng'];
$number=$_POST['number'];
function readNumber3Digit_1($number, $dictionaryNumber, $readFull=true)
{
	$number=strval($number);
	$number=str_pad($number, 3, 0, STR_PAD_LEFT);
	$digit_0=substr($number, 2, 1);
	$digit_00=substr($number, 1,1);
	$digit_000=substr($number, 0, 1);
	$str_000=$dictionaryNumber[$digit_000].' trăm';
	$str_00=$dictionaryNumber[$digit_00].' mươi';
	if($digit_00==0){$str_00=' linh';}
	if($digit_00==1){$str_00=' mười';}
	$str_0=$dictionaryNumber[$digit_0];
	if($digit_00>1&&$digit_0==1){$str_0=' mốt';}
	if($digit_00>=1&&$digit_0==5){$str_0=' lăm';}
	if($digit_00>1&&$digit_0==0){$str_0=' ';}
	if($digit_00==0 && $digit_0==0)
	{
		$str_0=' ';
		$str_00=' ';
	}
	if($readFull==false){
		if($digit_000==0){$str_000=' ';}
		if($digit_000==0&& $digit_00==0){$str_00=' ';}
	}
	$result=$str_000.$str_00.$str_0;
	return $result;
}
function formatString_1($str, $type=null)
{
	$str=strtolower($str);
	$str=trim($str);
	$array=explode(' ', $str);
	foreach($array as $key=>$value)
	{
		if(trim($value)==null)
		{
			unset($array[$key]);
			continue;
		}
		if($type=='danh-tu') $array[$key]=ucfirst($value);
	}
	$result=implode(' ', $array);
	$result=ucfirst($result);
	return $result;
}
function readNumber12Digits($number, $dictUnits, $dictNumbers)
{
	$number=strval($number);
	$number=str_pad($number, 12, 0, STR_PAD_LEFT);
	$arrNumber=str_split($number, 3);
	foreach($arrNumber as $key=>$value){
		if($value!='000')
		{
			$index=$key;
			break;
		}
	}
	foreach($arrNumber as $key=>$value)
	{
		if($key>=$index){
			$readFull=true;
			if($key==$index) $readFull=false;
			$result[$key]=readNumber3Digit_1($value, $dictNumbers, $readFull).' '.$dictUnits[$key];
		}
	}
	$result=implode(' ', $result);
	$result=formatString_1($result);
	$result=str_replace('không đồng', 'đồng', $result);
	$result=str_replace('không trăm đồng', 'đồng', $result);
	$result=str_replace('không nghìn đồng', 'đồng', $result);
	$result=str_replace('không trăm nghìn đồng', 'đồng', $result);
	$result=str_replace('không triệu đồng', 'đồng', $result);
	$result=str_replace('không trăm triệu đồng', 'đồng', $result);
	$result=str_replace('không tỷ triệu đồng', 'đồng', $result);
	return $result;
}
$result=readNumber12Digits($number, $dictUnits, $dictNumbers);
echo $result;
?>
</body>
</html>