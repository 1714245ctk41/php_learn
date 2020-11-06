<?php 
  echo 'Xin chào!' . '<br>';
 
  if (isset($_COOKIE['lastLogin'])) {
    $time = $_COOKIE['lastLogin'];
    echo 'last login: ' . date('d/m/Y H:i:s', $time);
    setcookie('lastLogin',time());
  } else {
    setcookie('lastLogin',time(), time() + 3600);
  }
?>