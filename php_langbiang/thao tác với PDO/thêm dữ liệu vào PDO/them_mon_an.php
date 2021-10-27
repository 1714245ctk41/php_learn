<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Thêm món ăn</title>
  <link rel="stylesheet" type="text/css" href="default.css">
  <script src="thuvien.js"></script>
</head>
<body>
  <?php 
  include("connection.php");
  $err = '';
  $sql = "select ma_loai, ten_loai from loai_mon_an";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  if ($stmt->rowcount() > 0) {
    $loai_mon = $stmt->fetchAll(PDO::FETCH_OBJ);
  }
  if (isset($_POST['th_luu'])) {
    //Lấy thông tin từ form gán vào các biến
    $ma_mon = NULL;
    $ma_loai = $_POST['th_ma_loai'];
    $ten_mon = $_POST['th_ten_mon'];
    $noi_dung_tom_tat = $_POST['th_noi_dung_tom_tat'];
    $noi_dung_chi_tiet = $_POST['th_noi_dung_chi_tiet'];
    $don_gia = $_POST['don_gia'];
    $don_gia_khuyen_mai = $_POST['th_don_gia_khuyen_mai'];
    $khuyen_mai = $_POST['th_khuyen_mai'];
    $hinh = $_FILES['th_hinh']['error'] == 0 ? $_FILES['th_hinh']['name']: '';
    $ngay_cap_nhat = $_POST['th_ngay_cap_nhat'];
    $dvt = $_POST['th_dvt'];
    $trong_ngay = $_POST['th_trong_ngay'] == 'on' ? 1: 0;

    $sql = 'insert into mon_an values(?,?,?,?,?,?,?,?,?,?,?,?)';
    $param = [$ma_mon, $ma_loai, $ten_mon, $noi_dung_tom_tat, $noi_dung_chi_tiet, $don_gia, $don_gia_khuyen_mai, $khuyen_mai, $hinh, $ngay_cap_nhat, $dvt, $trong_ngay];
    $stmt = $pdo->prepare($sql);
    $ketqua = $stmt->execute($param);
    if ($ketqua) {
      $err = 'Thêm dữ liệu thành công!';
      if ($hinh != '') {
        $kt = move_uploaded_file($_FILES['th_hinh']['tmp_name'], "images/$hinh");
        if ($kt) {
          $err .='upload hình thành công';
        }else {
          $err .='upload hình không thành công';
        }
      }
    }else {
      $err = 'Quá trình thêm dữ liệu không thành công!';
    }
  }
  ?>
  <h3 style="color:red"><?php echo $err; ?></h3>
  <div id="main">
    <h1>Món ăn mới</h1>
    <form action="them_mon_an.php" name="ManHinhThemMon" method="POST" enctype="multipart/form-data">
      <table class="center" cellpadding="2px">
        <tr>
          <td width="150px" bgcolor="B0D1EA">Tên món ăn</td>
          <td colspan="3"><input type="text" name="th_ten_mon" id="th_ten_mon" style="width:300px" value=""></td>
        </tr>
        <tr>
          <td bgcolor="B0D1EA">Loại món ăn</td>
          <td colspan="3">
            <select style="width:150px" name="th_ma_loai">
              <?php
              foreach ($loai_mon as $loai) {
                ?>
                <option value="<?php echo $loai->ma_loai; ?>"><?php echo $loai->ten_loai; ?></option>
                <?php
              }
              ?>
            </select>
          </td>
        </tr>
        <tr>
          <td bgcolor="B0D1EA">Nội dung tóm tắt</td>
          <td colspan="3"> <textarea name="th_noi_dung_tom_tat" id="th_noi_dung_tom_tat" cols="40" rows="5"></textarea> </td>
        </tr>
        <tr>
          <td bgcolor="B0D1EA">Nội dung chi tiết</td>
          <td colspan="3"> <textarea name="th_noi_dung_chi_tiet" id="th_noi_dung_chi_tiet" cols="40" rows="5"></textarea> </td>
        </tr>
        <tr>
          <td bgcolor="B0D1EA">Đơn giá</td>
          <td><input type="text" name="th_don_gia" id="th_don_gia" style="width:100px" value=""></td>
          <td bgcolor="B0D1EA">Đơn giá khuyến mãi</td>
          <td><input type="text" name="th_don_gia_khuyen_mai" id="th_don_gia_khuyen_mai" style="width:100px" value=""></td>
        </tr>
        <tr>
          <td bgcolor="B0D1EA">Hình</td>
          <td colspan="3"><input type="file" name="th_hinh" id="th_hinh" value=""></td>
        </tr>
        <tr>
          <td bgcolor="B0D1EA">Ngày cập nhật</td>
          <td><input type="text" name="th_ngay_cap_nhat" id="th_ngay_cap_nhat" style="width:100px" value=""></td>
          <td bgcolor="B0D1EA">Đơn vị tính</td>
          <td><input type="text" name="th_dvt" id="th_dvt" style="width:100px" value=""></td>
        </tr>
        <tr>
          <td bgcolor="B0D1EA">Khuyến mãi</td>
          <td><input type="text" name="th_khuyen_mai" id="th_khuyen_mai" style="width:100px" value=""></td>
          <td bgcolor="B0D1EA">Trong ngày</td>
          <td><input type="checkbox" name="th_trong_ngay" id="th_trong_ngay"></td>
        </tr>
        <tr>
          <td colspan="4" align="center"><input type="submit" value="Lưu" name="th_luu" onclick="return kiem_tra_mon_an()"></td>
        </tr>
      </table>
    </form>
  </div>
  <?php
  $pdo = NULL;
  ?>

</body>
</html>