<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Danh sách loại món ăn</title>
</head>
<body>
<?php 
  $pdo = new PDO("mysql:host=localhost;dbname=chickenrainshop", "root", "");
  $sql = "select id, name, description from categories";
  $sach = $pdo->query($sql);
  echo 'số lượng sách: '.$sach->rowcount().'<br>';
  echo 'mảng sach: ';
  echo '<pre>'.print_r($sach).'</pre>';
?>
<?php if ($sach->rowcount()>0): ?>
  <table width="500" border="0px solid red" cellspacing="5" cellpadding="5" align="center">
    <caption>
      <h2>THÔNG TIN SÁCH</h2>
    </caption>
    <tr>
      <td>Mã sách</td>
      <td>Tên loại</td>
      <td>Diễn giải</td>
    </tr>
    <?php foreach ($sach as $loai): ?>

      <tr>
        <td><?php echo $loai[0] ?></td>
        <td><?php echo $loai[1] ?></td>
        <td><?php echo $loai[2] ?></td>
      </tr>
    <?php endforeach ?>
  </table>
<?php endif ?>
</body>
</html>