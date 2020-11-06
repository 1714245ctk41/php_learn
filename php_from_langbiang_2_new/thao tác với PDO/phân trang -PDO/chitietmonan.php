<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Chi tiết món ăn</title>
  <link rel="stylesheet" type="text/css" href="default.css">
</head>
<?php 
  include("connection.php");
  $ma_mon = $_GET["key"];
  $sql = "select * from mon_an where ma_mon = ?";
  $param = [$ma_mon];
  $stmt = $pdo->prepare($sql);
  $stmt->execute($param);
  $mon_an = $stmt->fetch(PDO::FETCH_OBJ);
  echo '<pre>'.print_r($mon_an).'</pre>';
?>
<body>
<div id="main">
  <h1>CHI TIẾT MÓN ĂN</h1>
  <div class="khung">
    <img src="<?php echo $mon_an->hinh; ?>">
    <h3><?php echo $mon_an->ten_mon; ?></h3>
    <?php echo $mon_an->noi_dung_tom_tat ?>
    <p class="gia">Giá: <?php echo number_format($mon_an->don_gia); ?> VNĐ</p>
    <p class="right"><a href="truyen_tham_so.php">Danh sách món ăn</a></p>
  </div>
</div>
</body>
</html>