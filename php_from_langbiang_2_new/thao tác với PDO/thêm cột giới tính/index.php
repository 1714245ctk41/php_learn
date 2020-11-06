<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Danh sách món ăn</title>
  <link rel="stylesheet" type="text/css" href="default.css">
</head>
<?php 
  include("connection.php");
  $sql = "select * from khach_hang";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  if ($stmt->rowcount() > 0 ) {
    $khach_hang = $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
?>
<body>
<div id="main">
  <table width="700" border="0" cellspacing="5" align="center" style="border-collapse: collapse">
    <caption>
      <h1>THÔNG TIN KHÁCH HÀNG</h1>
    </caption>
    <tr class="tieude" height="40px">
      <th>Mã khách</th>
      <th>Họ tên</th>
      <th>Phái</th>
      <th>Địa chỉ</th>
      <th>Điện thoại</th>
      <th>Email</th>

    </tr>
    <?php 
      for ($i = 0; $i < count($khach_hang); $i++) {
        $hinh = $khach_hang[$i]['gioi_tinh'] == 1? 'Nam': "nữ";
        $le = $i%2 != 0? 'le': '';
      ?>
      <tr class="<?php echo $le; ?>">
        <td><?php echo $khach_hang[$i]['ma_khach_hang'] ?></td>
        <td><?php echo $khach_hang[$i]['ten_khach_hang'] ?></td>
        <td><img src="<?php echo $khach_hang[$i]['hinh'] ?>"></td>
        <td><?php echo $khach_hang[$i]['dia_chi'] ?></td>
        <td><?php echo $khach_hang[$i]['dien_thoai'] ?></td>
        <td><?php echo $khach_hang[$i]['email'] ?></td>
      </tr>
      <?php
      }
    ?>
  </table>
</div>
<?php $pdo = NULL; ?>
</body>
</html>