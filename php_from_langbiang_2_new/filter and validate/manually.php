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
      letter-spacing: 1px;
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
  $x = (isset($_POST['value']))?$_POST['value']:'';
  function checkNumber($x){
    $flag = false;
    if ($x %2 == 0) {
      $flag = true;
    }
    return $flag;
  }
  if (filter_var($x, FILTER_CALLBACK, ['options'=>'checkNumber'])) {
     echo 'số chẵn';
   } else echo 'số lẻ';
  // function convertString($string){
  //   $string = str_replace(' ', '_', $string);
  //   return $string;
  // }
  // $x= filter_var($x, FILTER_CALLBACK, ['options'=>'convertString'] );
  // $int_options = ['options'=>['min_range'=>4, 'max_range'=>10]];
  // if (filter_var($x, FILTER_VALIDATE_URL)) {
  //   echo 'Thỏa điều kiện';
  // }else echo 'Không thỏa điều kiện';
?>
  <fieldset>
    <legend>form basic</legend>
    <form action="#" method="POST">
    <p><input type="text" name="value" placeholder="Nhập để kiểm tra" autofocus value="<?php echo $x; ?>"></p>
    <p><button type="submit">test</button></p>
  </form>
  </fieldset>

</body>
</html>