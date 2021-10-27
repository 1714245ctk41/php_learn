<?php 
  function checkFileSize($size, $min, $max){
    $flag = false;
    if($size>=$min && $size<=$max) $flag = true;
    return $flag;
  }
  function checkFileExtension($fileName, $arrExtension){
    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $flag = false;
    if (in_array(strtolower($ext), $arrExtension) == true) {
      $flag = true;
    }
    return $flag;
  }
  function randomString($length = 5){
    $arrChar = array_merge(range('A', 'Z'), range('a', 'z'), range('0', '9'));
    $chars = implode($arrChar, '');
    $chars = str_shuffle($chars);
    $result = substr($chars, 0, $length);
    return $result;
  }
?>