<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Danh sách tin tức</title>
  <style type="text/css">
    *{
      border:0;
      

    }
  </style>
</head>
<?php 
  include("connection.php");
  $sql = "select * from wp_posts";
  $tin_tuc = $pdo->query($sql);
?>
<body>
<?php if ($tin_tuc->rowcount() > 0): ?>
  <table width="800px" border="0" cellpadding="5" cellspacing="5">
    <caption><h2>THÔNG TIN TIN TỨC</h2></caption>
    <tr>
      <th>Tiêu đề</th>
      <th>Tóm tắt</th>
      <th>tên post</th>
      <th>post type</th>
      
    </tr>
    <?php foreach ($tin_tuc as $tin): ?>
      <tr>
        <td><?php echo $tin['post_title'] ?></td>
        <td><?php echo $tin['post_content'] ?></td>
        <td><?php echo $tin['post_name'] ?></td>
        <td><?php echo $tin['post_type'] ?></td>
      </tr>
    <?php endforeach ?>
  </table>
<?php endif ?>
<?php $pdo = null; ?>
</body>
</html>