<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript" src="jquery-3.4.1.js"></script>
  <script type="text/javascript">
    $(document).read(function(){
      $('#btnHuy').click(function(){
        window.location = 'index.php';
      })
    })
  </script>
</head>
<body>
<?php 
  require_once 'functions.php';
  $id = $_GET['id'];
  $content = file_get_contents('./files/'.$id.'.txt');
  $content = explode('||', $content);
  $title = $content[0];
  $description = $content[1];
  $flag = false;
  $errorTitle = '';
  $errorDescription = '';
  if (isset($_POST['title']) && isset($_POST['description'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    if (checkEmpty($title)) {
      $errorTitle = '<p class="error">Tiêu đề không được để trống</p>';
    }
    if(checkLength($title, 5, 100)){
      $errorTitle .= '<p class="error">Tiêu đề dài từ 5 đến 100 kí tự</p>';
    }
    if(checkEmpty($description)){
      $errorDescription = '<p class="error">Mộ tả không được để trống</p>';
    }
    if(checkLength($description, 10, 500)){
      $errorDescription .= '<p class="error">Mô tả dài từ 10 đến 500 kí tự</p>';
    }
    if ($errorTitle == '' && $errorDescription == '') {
      $data= $title.'||'.$description;
      $fileName = './files/'.$id.'.txt';
      if (file_put_contents($fileName, $data)) {
        $title = '';
        $description = '';
        $flag = true;
      }
    }
  }
?>
<div class="wrapper">
  <div class="heading">ADD and EDIT FILE</div>
  <div id="form">
    <form action="#" method="POST">
      <div class="row">
        <p class="title">Tiêu đề</p>
        <input type="text" name="title" value="<?php echo $title; ?>">
        <?php echo $errorTitle; ?>
      </div>
      <div class="row">
        <p class="title">Mô tả</p>
        <textarea name="description" id="" cols="100" rows="5"><?php echo $description; ?></textarea>
        <?php echo $errorDescription; ?>
      </div>
      <div class="row">
        <input type="submit" name="" value="Lưu">
        <input type="button" name="" value="Hủy" id="btnHuy">
      </div>
      <?php 
      if ($flag == true) {
         echo '<div class="row">Ghi dữ liệu thành công!</div>';
       } ?>
    </form>
  </div>
</div>
</body>
</html>