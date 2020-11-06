<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
  <style>
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
  $configs = parse_ini_file('config.ini');
  echo '<pre>'.print_r($configs).'</pre>';
  if (isset($_FILES['fileUpload'])) {
    $fileUpload = $_FILES['fileUpload'];
    echo '<pre>'.print_r($fileUpload).'</pre>';
    foreach($fileUpload['name'] as $key=>$value){
      $flagSize = checkFileSize($fileUpload['size'][$key], $configs['min_size'], $configs['max_size']);
      $flagExt = checkFileExtension($fileUpload['name'][$key], explode('|', $configs['extension']));
      if ($fileUpload['name']!=null && $flagSize && $flagExt) {
        $fileNameTmp = $fileUpload['tmp_name'][$key];
        $random = randomString(5);
        $destination = './files/'.$random.'_'.$fileUpload['name'][$key];
        if (move_uploaded_file($fileNameTmp, $destination)) {
          echo 'Upload succeeded!';
        }else {
          echo 'Upload filed!';
        }
      }
    }
  }
?>
<fieldset>
  <legend>form multiple upload</legend>
  <form method="post" action="#" enctype = "multipart/form-data">
    <input type="file" name="fileUpload[]">
    <input type="file" name="fileUpload[]">
    <input type="file" name="fileUpload[]">
    <input type="submit" name="" value="Submit">
  </form>
</fieldset>
</body>
</html>