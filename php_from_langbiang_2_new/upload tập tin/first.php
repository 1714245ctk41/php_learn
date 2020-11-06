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
  if (isset($_FILES['fileUpload'])) {
    $fileUpload = $_FILES['fileUpload'];
    if ($fileUpload['name'] != null) {
      $fileNameTmp = $fileUpload['tmp_name'];
      $destination = 'files/'.$fileUpload['name'];
      if (move_uploaded_file($fileNameTmp, $destination)) {
        echo 'upload succeeded';
      }else{
        echo 'uploaded failed!';
      }
    }
  }
?>
<form action="#" method = "post" enctype = "multipart/form-data">
  <input type="file" name="fileUpload">
  <input type="submit" name="Submit" value="Submit">
</form>
</body>
</html>