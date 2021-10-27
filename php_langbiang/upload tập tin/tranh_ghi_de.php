<?php 
  function randomString($length = 5){
    $arrayChar = array_merge(range('A', 'Z'), range('a', 'z'), range('0','9'));
    $string = implode($arrayChar, '');
    $string = str_shuffle($string);
    $result = substr($string, 0, $length);
    return $result;
  }
  if (isset($_FILES['fileUpload'])) {
    $fileUpload = $_FILES['fileUpload'];
    if ($fileUpload['name'] != null) {
      $fileNameTmp = $fileUpload['tmp_name'];
      $random = randomString();
      $destination = 'files/'.$random.'_'.$fileUpload['name'];
      if (move_uploaded_file($fileNameTmp, $destination)) {
        echo 'Upload succeeded!';
      }
      else {
        echo 'upload failed!';
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
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
  <form action="#" method = "post" enctype = "multipart/form-data">
  <input type="file" name="fileUpload">
  <input type="submit" name="Submit" value="Submit">
</form>
</body>
</html>