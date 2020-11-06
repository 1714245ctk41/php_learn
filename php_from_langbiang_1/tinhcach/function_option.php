<?php
$data=file('options.txt') or die("Cannot read file");
array_shift($data);
$arrOptions=[];
foreach($data as $key=>$value)
{
	$tmpArry=explode('|', $value);
	$questionID=$tmpArry[0];
	$optionID=$tmpArry[1];
	$answer=$tmpArry[2];
	$point=$tmpArry[3];
	$arrOptions[$questionID][$optionID]['option']=$answer;
	$arrOptions[$questionID][$optionID]['point']=$point;
}
?>