<?php 
$data = file_get_contents('https://animehay.tv/');
$pattern = '#<div class="ah-col-film" data-id="2967">.*<a.*<\/span>\s*<\/a>\s*<\/div>\s*<\/div>#imsu';
preg_match_all($pattern, $data, $match);
$pattern_link = '#href="(.*)"#imsu';
// preg_match_match($pattern, $match[0], $pattern_link);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style type="text/css">
    *{
      box-sizing: border-box;
    }
    .container{
      display:grid;
      grid-template-columns: auto auto auto auto;
    }
    .ah-pad-film {
      width: 200px;
      height: 400px;
      margin: 20px;
    }

    .ah-pad-film img, .ah-effect-film img {
      width: 100%;
      height: 100%;
    }
    .ah-col-film {
      display: inline-block;
    }
  </style>
</head>
<body>

  <?php 
  $result = [];
  // while(list($key , $value) = each($match)){
  //   echo '<h1>Hello world</h1>';
  //   echo '<pre>'.print_r($value).'</pre>'.'<br>';
  // }
  // echo $pattern_link[1].'<hr>';
  echo '<pre>'.print_r($match[0]).'</pre>';
  ?>
  <hr>
<?php 
// echo '<pre>'.print_r($result[0]['link']).'</pre>'

 ?>
</body>
</html>