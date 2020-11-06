<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Danh sách món ăn</title>
  <link rel="stylesheet" type="text/css" href="default.css">
</head>
<?php 
  include("connection.php");
  $sql = "select ma_mon, ten_mon, noi_dung_tom_tat, don_gia, hinh from mon_an";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  if ($stmt->rowcount() > 0) {
    $mon_an = $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
?>
<body>
<div id="main">
  <h1>Danh sách món ăn</h1>
  <?php 
    for ($i = 0; $i < count($mon_an); $i++) {
      $bg = $i % 2 != 0? 'le' : '';
  ?>
  <div class="khung <?php echo $bg; ?>">
    <a href="chitietmonan.php?key=<?php echo$mon_an[$i]['ma_mon'] ?>"><img src="<?php echo $mon_an[$i]['hinh'] ?>" alt="" class="cangiua"></a>
    <a href="chitietmonan.php?key=<?php echo$mon_an[$i]['ma_mon'] ?>"><?php echo $mon_an[$i]['ten_mon'] ?></a>
    <p><?php echo $mon_an[$i]['noi_dung_tom_tat'] ?></p>
    <p class="gia">Giá: <?php echo number_format($mon_an[$i]['don_gia']) ?> VNĐ</p>
  </div>
  <?php
    }
  ?>
</div>
<?php $pdo = NULL; ?>
</body>
</html>