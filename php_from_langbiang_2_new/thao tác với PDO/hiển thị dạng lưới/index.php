<?php 
  try {
    $pdo = new PDO("mysql:host=localhost;dbname=langbiang_restaurant", "root", "");
    $pdo->query("SET NAMES UTF8");
  } catch (PDOException $ex) {
    die($ex->getMessage());
  }
?>
<?php 
  $sql = "select ten_mon, noi_dung_tom_tat, don_gia, hinh from mon_an";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  if ($stmt->rowcount() > 0) {
    $mon_an = $stmt->fetchAll(PDO::FETCH_OBJ);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="default.css">
</head>
<body>
<div id="main">
  <h1>Danh sách món ăn</h1>
  <?php 
    for($i = 0; $i< count($mon_an); $i++){
  ?>
    <div class="khung">
      <img class="cangiua" src="<?php echo $mon_an[$i]->hinh; ?>">
      <p class="tenmon"><?php echo $mon_an[$i]->ten_mon ?></p>
      <p><?php echo $mon_an[$i]->noi_dung_tom_tat; ?></p>
      <p class="gia"><?php echo $mon_an[$i]->don_gia ?> VNĐ</p>
    </div>
  <?php } ?>
</div>
<?php $pdo=NULL; ?>
</body>
</html>