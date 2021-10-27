<?php 
  session_start();
  session_unset();
  $image = 'backiee-91726.jpg';
  if (file_exists($image)) {
    $_SESSION['image']['info'] = getimagesize($image);
    $_SESSION['image']['data'] = file_get_contents($image);
  }else {
    echo 'Tập tin không tồn tại';
  }
  //sử dụng head để xác định kiểu dữ liệu để xuất
  header('Content-type:image/jpeg');
  echo $_SESSION['image']['data'];
?>