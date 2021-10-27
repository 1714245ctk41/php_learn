<?php 
  session_start();
  $_SESSION['name'] = 'Nguyễn Văn Tèo';
  echo $_SESSION['name'];
  $_SESSION['name']='abc';
  echo '<br>'.$_SESSION['name'];
  if (isset($_SESSION['age'])) {
    $_SESSION['age']=10;
  }else{
    $_SESSION['age'] = 20;
  }
  echo '<br>'.$_SESSION['age'];
  unset($_SESSION['age']);
  if (isset($_SESSION['age'])) {
    echo '<br>'.'Tồn tại';
  }else {
    echo '<br>'.'Không tồn tại';
  }
  
?>