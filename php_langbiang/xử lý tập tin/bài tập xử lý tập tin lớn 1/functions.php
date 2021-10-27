<?php 
  function checkEmpty($value){
    $flag = false;
    if (!isset($value) || trim($value) == '') {
      $flag = true;
    }
    return $flag;
  }

  function checkLength($value, $min, $max){
    $flag = false;
    $length = strlen($value);
    if ($length < $min || $length > $max ) {
      $flag = true;
    }
    return $flag;
  }

  function randomString($length = 5){
    $arrChar = array_merge(range('A', 'Z'), range('a', 'z'), range('0', '9'));
    $chars = implode($arrChar, '');
    $chars = str_shuffle($chars);
    $result = substr($chars, 0, 5);
    return $result;
  }
  function convertSize($size, $totalDigit = 2, $distance = ''){
    $units = ['B', 'KB', 'MB', 'GB', 'TB'];
    $length = count($units);
    for ($i = 0; $i < $length; $i++) {
      if ($size >= 1024) {
        $size /= 1024;
      }else{
        $unit = $units[$i];
        break;
      }
    }
    $result = round($size, $totalDigit).' '.$distance.' '.$unit;
    return $result;
  }
?>