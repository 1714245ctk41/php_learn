<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Danh sách món ăn</title>
  <link rel="stylesheet" type="text/css" href="default.css">
</head>
<body>
<?php 
  include("connection.php");
  $sql = "select ma_mon, ten_mon, noi_dung_tom_tat, don_gia, hinh from mon_an";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  if ($stmt->rowcount() > 0) {
    $mon_an = $stmt->fetchAll(PDO::FETCH_OBJ);
  }
?>
<div id="main">
  <h1>Danh sách món ăn</h1>
  <?php foreach ($mon_an as $item): ?>
    <div class="khung">
      <img src="<?php echo $item->hinh; ?>">
      <h3><?php echo $item->ten_mon; ?></h3>
      <?php echo $item->noi_dung_tom_tat ?>
      <p>Đơn giá: <?php echo $item->don_gia ?></p>
    </div>
  <?php endforeach ?>
</div>
<?php $pdo = NULL; ?>
</body>
</html>