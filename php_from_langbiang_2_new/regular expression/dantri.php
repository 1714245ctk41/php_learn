<!-- #class="mt3 clearfix">.*src="(.*)".*fon44.*>(.*)<\/.*"fon5 wid255 fl">.*<\/span>(.*)<\/  : kết thúc bằng <\/(đầu tiên) khác với <\/div>(sẽ lấy hết đến div cuối )  -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<?php 
  $data = file_get_contents('https://dantri.com.vn/giao-duc-khuyen-hoc/khuyen-hoc.htm');
   $pattern = '#class="mt3 clearfix eplcheck">.*src="(.*)".*class="fon6".*>(.*)<.*fon5 wid324 fl">.*<\/span>(.*)<\/#ismU';
  preg_match_all($pattern, $data, $matches);
  // echo '<pre>'.print_r($matches[3]).'</pre>';
  $result = [];
  foreach ($matches[1] as $key=>$value) {
    $result[$key]['image'] = $matches[1][$key];
    $result[$key]['title'] = $matches[2][$key];
    $result[$key]['description'] = $matches[3][$key];
  }
  $pattern = '#class="mt3 clearfix">.*src="(.*)".*fon44.*>(.*)<\/.*"fon5 wid255 fl">.*<\/span>(.*)<\/#imsU';
  preg_match($pattern, $data, $matches);
  // echo '<pre>'.print_r($matches[1]).'</pre>';
  $top['image'] = $matches[1];
  $top['title'] = $matches[2];
  $top['description'] = $matches[3];
  array_unshift($result, $top);
 
?>
<div class="container">
  <?php foreach ($result as $key=>$value): ?>
    <div class="news">
      <img src="<?php echo $value['image'] ?>">
      <h3><?php echo $value['title'] ?></h3>
      <p><?php echo $value['description'] ?></p>
    </div>
  <?php endforeach ?>
</div>
</body>
</html>