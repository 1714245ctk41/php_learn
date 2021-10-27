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
  $id = $_GET['id'];
  $content = file_get_contents('./files/'.$id.'.txt');
  $content = explode('||', $content);
  $title = $content[0];
  $description = $content[1];
  $flag = false;
  if (isset($_POST['id'])) {
    $id = $_POST['id'];
    @unlink('./files/'.$id.'.txt');
    $flag = true;
  }
?>
<div class="wrapper">
  <div class="heading">DELETE FILE</div>
  <?php if($flag == false){ ?>
    <div id="form">
      <form action="#" method="POST">
        <div class="row">
          <p>Tập tin: </p>
          <span><?php echo realpath('./files/'.$id.'txt'); ?></span>
        </div>
        <div class="row">
          <p>Tiêu đề: </p>
          <span><?php echo $title; ?></span>
        </div>
        <div class="row">
          <p>Mô tả:</p>
          <span><?php echo $description; ?></span>
        </div>
        <div class="row">
          <input type="hidden" name="id" value="<?php echo $id ?>">
          <input type="submit" name="" value="Xóa">
          <input type="button" name="" value="Hủy" id="btnHuy">
        </div>
      </form>
        <?php }else{
          echo '<p>Đã xóa được tập tin. Bấm vào <a href="index.php">đây</a> để về trang chủ</p>';
        } ?>
    </div>

</div>
</body>
</html>