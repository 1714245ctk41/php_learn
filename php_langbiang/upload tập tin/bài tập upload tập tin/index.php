<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
  <style type="text/css">
    input, button{
      padding:5px;
      font-size:20px;
      border-radius: 5px;
      border:1px solid gray;
    }
    button{
      padding:5px 10px;
    }
    input:focus, button:focus{
      outline:none;
    }
  </style>
</head>
<body>
<?php 
  require_once 'functions.php';
  $error = '';
  $configs = parse_ini_file('config.ini');
  // echo '<pre>'.print_r($configs).'</pre>';
  if (isset($_FILES['fileUpload'])) {
    $fileUpload = $_FILES['fileUpload'];
    $arrUpload = [];
    $flagSize = checkFileSize($fileUpload['size'], $configs['min_size'], $configs['max_size']);
    $flagExt = checkFileExtension($fileUpload['name'], explode('|', $configs['extension']));

    if ($fileUpload['name'] != null && $flagSize && $flagExt ) {
      $fileNameTmp = $fileUpload['tmp_name'];
      $random = randomString();
      $destination = './files/'.$random.'_'.$fileUpload['name'];
      if (move_uploaded_file($fileNameTmp, $destination)) {
        echo 'upload succeeded!';
        $arrUpload['name'] = $_FILES['fileUpload']['name'];
        $arrUpload['type'] = $_FILES['fileUpload']['type'];
        $arrUpload['tmp_name'] = $_FILES['fileUpload']['tmp_name'];
        $arrUpload['size'] = $_FILES['fileUpload']['size'];
      }else {
        echo 'upload failed!';
      }
    }
    if ($flagSize == false) {
      $error = 'Upload không thành công, vui logn2 upload tập tin từ 100KB tới 5MB ';
    }
    if ($flagExt == false) {
      $error = "Upload không thành công, vui lòng upload tập tin có phần mở rộng là jpg, png, zip, mp3";
    }

  }
?>
<fieldset>
  <legend>Form basic</legend>
  <?php echo '<pre>'.print_r($configs).'</pre>'; ?>
  <form action="#" method="POST" enctype="multipart/form-data">
    <input type="file" name="fileUpload">
    <input type="submit" name="" value="Submit">
    <?php 
      echo '<p style="color:red">'.$error.'</p>';
    ?>
    <?php foreach ($fileUpload as $fileupload): ?>
      <?php echo '<p>'.$fileupload.'</p>' ?>
    <?php endforeach ?>
  </form>
</fieldset>
</body>
</html>