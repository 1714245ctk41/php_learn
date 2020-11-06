<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript" src="jquery-3.4.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#btnHuy').click(function(){
        window.location = 'index.php';
      })
    })
  </script>
</head>
<body>
<?php 
  require_once 'functions.php';
  $flag = false;
  $errorTitle = '';
  $errorDescription = '';
  $title = '';
  $description = '';
  if (isset($_POST['title']) && isset($_POST['description'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    if (checkEmpty($title)) {
      $errorTitle = '<p class="error">Tiêu đề không được để trống</p>';
    }
    if (checkLength($title, 5, 100)) {
      $errorTitle .='<p class="error">Tiêu đề dài từ 5 đến 100 kí tự</p>';
    }
    if (checkEmpty($description)) {
      $errorDescription = '<p class="error">Mô tả không được đề trống</p>';
    }
    if (checkLength($description, 10 , 500)) {
      $errorDescription .= '<p class="error">Mô tả dài từ 10 đến 500 kí tự</p>';
    }
    if ($errorTitle == '' && $errorDescription == '') {
      $data = $title.'||'.$description;
      $name = randomString(5);
      $fileName = './files/'.$name.'.txt';
      if (file_put_contents($fileName, $data)) {
        $title = '';
        $description = '';
        $flag = true;
      }else{
        echo 'Lỗi';
      }
    }
  }
?>
<div class="wrapper">
  <div class="heading">ADD FILE</div>
  <div id="form">
    <form action="add.php" method="post">
      <div class="row">
        <p class="title">Tiêu đề</p>
        <input type="text" name="title" value="<?php echo $title; ?>">
        <?php echo $errorTitle; ?>
      </div>
      <div class="row">
        <div class="title">Mô tả</div>
        <textarea name="description" id="" cols="100" rows="5"><?php echo $description; ?></textarea>
        <?php echo $errorDescription ?>
      </div>
      <div class="row">
        <input type="submit" name="" value="Lưu">
        <input type="button" name="" value="Hủy" id="btnHuy">
      </div>
      <?php if ($flag == true) {
        echo '<div class="row">Ghi dữ liệu thành công!</div>';
      } ?>
    </form>
  </div>
</div>
</body>
</html>