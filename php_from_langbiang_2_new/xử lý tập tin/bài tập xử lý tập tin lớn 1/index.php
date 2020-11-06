<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>File</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript" src="jquery-3.4.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#multipleDelete').click(function(){
        $('#mainForm').submit();
      })
    })
  </script>
</head>
<body>
<?php 
  require_once 'functions.php';
  $data = scandir('./files');
?>
<div class="wrapper">
  <div class="heading">QUẢN LÝ TẬP TIN</div>
  <form action="multipleDelete.php" method="post" id="mainForm">
    <?php 
      $i = 0;
      foreach ($data as $key=>$value) {
        if ($value =='.' || $value == '..' || preg_match('/.txt$/imsU', $value) == false ) continue;
          $content = file_get_contents('./files/'.$value);
          $content = explode('||', $content);
          $title = $content[0];
          $description = $content[1];
          $id = substr($value, 0, 5);
          $size = convertSize(filesize('./files/'.$value));
          ?>

          <div class="row <?php if($i%2 == 0 ) echo 'odd' ?>">
            <p class="check">
              <input type="checkbox" name="checkbox[]" value="fileName">
            </p>
            <p class="content"><?php echo $title; ?><span><?php echo $description; ?></span></p>
            <p class="id"><?php echo $id; ?></p>
            <p class="size"><?php echo $size; ?></p>
            <p class="action">
              <a href="edit.php?id=<?php echo $id; ?>">Edit</a> | 
              <a href="delete.php?id=<?php echo $id; ?>">Delete</a>
            </p>
          </div>
          <?php
          $i++;
        }
    ?>
  </form>
  <div class="">
    <a href="add.php">Thêm tập tin</a>
    <a href="#" id="multipleDelete">Xóa tập tin</a>
  </div>
</div>
</body>
</html>