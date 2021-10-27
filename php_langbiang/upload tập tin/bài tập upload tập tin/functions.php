<?php 
  function checkFileSize($size, $min, $max){
    $flag = false;
    if ($size >= $min && $size <= $max) {
      $flag = true;
    }
    return $flag;
  }
  function checkFileExtension($fileName, $arrExtension){
    $ext= pathinfo($fileName, PATHINFO_EXTENSION);
    echo $ext;
    $flag = false;
    if (in_array(strtolower($ext), $arrExtension) == true) {
      $flag = true;
    }
    return $flag;
  }

  function randomString($length = 5){
    $arrChar = array_merge(range('a', 'z'), range('A', 'Z'), range('0','9'));
    $str = implode($arrChar, '');
    $str = str_shuffle($str);
    $chars = substr($str, 0, $length);
    return $chars;
  }
?>