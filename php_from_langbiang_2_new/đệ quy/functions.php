<?php 
  function GiaiThua($n){
    $result= 1;
    if($n == 0 || $n == 1){
      return $result;
    }else{
      $result = $n * GiaiThua($n - 1);
    }
    return $result;
  }
  function sum($n){
    $result = 0;
    if ($n == 0) {
      return $result;
    }else{
      $result = $n + sum($n - 1);
    }
    return $result;
  }
?>