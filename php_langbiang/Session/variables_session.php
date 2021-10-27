<?php 
  $variable = 'abc';
  session_start();
  $_SESSION['var'] = $variable;
  unset($_SESSION['name']);
  
  unset($_SESSION['var']);
  $arr = [
    ['tên' => 'Tèo', 'tuổi'=>10],
    ['tên' => 'Tí', 'tuổi'=>11],
    ['tên' => 'Sửu', 'tuổi'=>12]
  ];
  $_SESSION['arr'] = $arr;
  while (list($key, $value) = each($_SESSION['arr'])) {
      echo $key.' => '.$value['tên'].'<br>';
  }
  session_unset();
  echo 'function into session: '.'<br>';
  $_SESSION['func'] = 'function checkNumber($number){return ($number %2 ? "Số lẻ": "số chẵn");}';
  eval($_SESSION['func']);
  echo checkNumber(50).'<br>';
  echo '<pre>'.print_r($_SESSION).'</pre>';
?>