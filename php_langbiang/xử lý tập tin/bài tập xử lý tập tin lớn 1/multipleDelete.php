<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<?php 
  $checkbox = $_POST['checkbox'];
  if (!empty($checkbox)) {
    foreach ($checkbox as $key=>$value) {
      unlink('./files/'.'.txt');
    }
  }
?>
<div class="wrapper">
  <div class="heading">DELETE FILE</div>
  <div>
    <p>Đã xóa được tập tin. Bấm vào <a href="index.php">đây</a> để về trang chủ.</p>
  </div>
</div>
</body>
</html>