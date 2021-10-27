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
  $options2 = ['options'=>['regexp'=>'#[a-zA-Z0-9]+$#']];
  $options1 = ['options'=>['regexp'=>'#\.(jpg|png|gif)$#']];
  $options = ['options'=>['regexp'=>'#^084-[0-9]{2}-[0-9]{2}\.[0-9]{6}$#']];
  if (filter_var($x, FILTER_VALIDATE_REGEXP, $options)) {
    echo $x.' là số điện thoại thỏa mãn';
  }else if(filter_var($x, FILTER_VALIDATE_REGEXP, $options1)){
    echo $x.' tập tin có đuôi chuẩn';
  }else if(filter_var($x, FILTER_VALIDATE_REGEXP, $options2)){
    echo $x.' thỏa chỉ chứa chữ và số';
  }

?>
  <fieldset>
    <legend>REGEX</legend>
    <form action="#" method="POST">
    <p><input type="text" name="value" placeholder="Nhập để kiểm tra" autofocus value="<?php echo $x; ?>"></p>
    <p><button type="submit">test</button></p>
  </form>
  </fieldset>
<?php 
  $data = ['name'=>'Nguyen Van teo', 'age'=>'13', 'email'=>'nvt@gmail.com'];
  $filters = [
    'name'=>[
        'filter'=>FILTER_CALLBACK,
        'options'=>'ucwords'
    ],
    'age'=>[
        'filter'=>FILTER_VALIDATE_INT,
        'options'=>['min_range'=>1, 'max_range'=>100]
    ],
    'email'=>[
        'filter'=>FILTER_VALIDATE_EMAIL
    ]
  ];
  $result = filter_var_array($data, $filters);
  echo '<pre>'.print_r($result).'</pre>';
?>
</body>
</html>