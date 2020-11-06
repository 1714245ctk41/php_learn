<?php 
  $subject = 'PHP /PHP/ is easy PHP';
  $pattern = '/PHP/';
  if(preg_match($pattern, $subject, $match)==true){
    echo 'tìm thấy <br>';
  }else echo 'không tìm thấy <br>';
  while (list($key, $value) = each($match)) {
      echo $key.' - '.$value.'<br>';
  }
  echo '<hr>preg_match_all(pattern, subject, matches), với preg_match_all phải truy cập $match[0]: <br>';
  if(preg_match_all($pattern, $subject, $match)==true){
    echo 'tìm thấy <br>';
  }else echo 'không tìm thấy <br>';
  while (list($key, $value) = each($match[0])) {
      echo $key.' - '.$value.'<br>';
  }
  $pattern1 = '/\/PHP\//';
  if (preg_match_all($pattern1, $subject, $match1) == true) {
    while (list($k, $v) = each($match1[0])) {
        echo $k.' - '.$v.'<br>';
    }
  }else echo 'không khớp';
  echo '<hr>Nếu sử dụng /../ thì sẽ khó nhìn, thay vào đó hãy sử dụng dấu #..# trong $pattern: <br>';
?>