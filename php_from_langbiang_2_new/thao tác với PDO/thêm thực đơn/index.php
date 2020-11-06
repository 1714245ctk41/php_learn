<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>thêm thực đơn</title>
  <link rel="stylesheet" type="text/css" href="default.css">
  <script type="text/javascript" src="thuvien.js"></script>
</head>
<?php 
include("connection.php");
$err = '';
if (isset($_POST['th_luu'])) {
  $ma_thuc_don= $_POST['th_ma_thuc_don'];
  $ten_thuc_don = $_POST['th_ten_thuc_don'];
  $don_gia = $_POST['th_don_gia'];
  $don_gia_khuyen_mai = $_POST['th_don_gia_khuyen_mai'];
  $noi_dung = $_POST['th_noi_dung'];
  $hinh = $_FILES['th_hinh']['error'] == 0 ? $_FILES['th_hinh']['name'] : '';

  $sql = "insert into thuc_don values(?,?,?,?,?,?)";
  $param = [$ma_thuc_don, $ten_thuc_don, $don_gia, $don_gia_khuyen_mai, $noi_dung, $hinh];
  $stmt = $pdo->prepare($sql);
  $kq = $stmt->execute($param);
  if ($kq) {
    $err = 'Thêm dữ liệu thành công!';
    if ($hinh != '') {
      $kt = move_uploaded_file($_FILES['th_hinh']['tmp_name'], "images/$hinh");
    }else {
      $err .='Upload hình không thành công';
    }
  }else {
    $err = 'Thêm dữ liệu không thành công';
  }
}
?>
<body>
  <h3 style="color:red"><?php echo $err; ?></h3>
  <div id="main">
    <h1>Thực đơn mới</h1>
    <form action="them_thuc_don.php" name="ManHinhThemThucDon" method="POST" enctype="multipart/form-data">
      <table cellpadding="2px">
        <tr>
          <td width="150px" bgcolor="B0D1EA">Tên thực đơn</td>
          <td colspan="3"><input type="text" name="th_ten_thuc_don" id="th_ten_thuc_don" style="width:300px" value=""></td>
        </tr>
        <tr>
          <td bgcolor="B0D1EA">Đơn giá</td>
          <td><input type="text" name="th_don_gia" id="th_don_gia" style="width:100px" value=""></td>
          <td bgcolor="B0D1EA">Đơn giá khuyến mãi</td>
          <td><input type="text" name="th_don_gia_khuyen_mai" id="th_don_gia_khuyen_mai" value=""></td>
        </tr>
        <tr>
          <td bgcolor="B0D1EA">Nội dung</td>
          <td colspan="3"> <textarea name="th_noi_dung" id="th_noi_dung" cols="40" rows="5"></textarea> </td>
        </tr>
        <tr>
          <td bgcolor="B0D1EA">Hình</td>
          <td colspan="3"><input type="file" name="th_hinh" id="th_hinh" value=""></td>
        </tr>
        <tr>
          <td colspan="4" align="center"><input type="submit" value="Lưu" name="th_luu" onclick="return kiem_tra_thuc_don()"></td>
        </tr>
      </table>
    </form>
  </div>
  <?php
  $pdo = NULL;
  ?>
</body>
</html>