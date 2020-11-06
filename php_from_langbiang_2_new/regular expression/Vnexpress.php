<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<?php 
  $data = file_get_contents('https://vnexpress.net/giao-duc') or die('Không mở được file');
  $pattern = '#<section class="sidebar_1">(.*)</section>#imsU';
  preg_match($pattern, $data, $matches);
  
  $pattern = '#<article class="list_news">(.*)<\/article>#imsU';
  preg_match_all($pattern, $matches[1], $matches);
  $result = [];
  foreach ($matches[0] as $key=>$value) {
    if ($key<3) {
      $pattern = '#href="(.*)".*">(.*)<\/a>.*src="(.*)".*class="description">(.*)<\/h4>#imsU';
      preg_match($pattern, $value, $matches);
      $result[$key]['link'] = $matches[1];
      $result[$key]['title']=$matches[2];
      $result[$key]['image'] = $matches[3];
      $result[$key]['description'] = $matches[4];
    }else {
      $pattern = '#href="(.*)".*">(.*)<\/a>.*<a.*src="(.*)".*data-original="(.*)".*class="description">(.*)<\/p>#imsU';
      preg_match($pattern, $value, $matches);
      $result[$key]['link'] = $matches[1];
      $result[$key]['title'] = $matches[2];
      $result[$key]['image'] = $matches[4];
      $result[$key]['description'] = $matches[5];
    }
  }
?>
<div class="container">
  <?php foreach ($result as $key=>$value): ?>
    <div class="news">
      <img src="<?php echo $value['image']; ?>">
      <h3><a href="<?php echo $value['link'] ?>"><?php echo $value['title'] ?></a></h3>
      <p><?php echo $value['description'] ?></p>
    </div>
  <?php endforeach ?>
</div>
</body>
</html>