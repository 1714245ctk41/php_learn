<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Danh sách sách</title>
</head>
<body>
<?php 
  $pdo = new PDO("mysql:host=localhost;dbname=chickenrainshop", "root", "");
  $pdo->query("SET NAMES UTF8");
  $sql = "select * from books";
  $books = $pdo->query($sql);
?>
<?php if ($books->rowcount()>0): ?>
  <table width="800px" border="0" cellpadding="5" cellspacing="5" align="center">
    <caption><h2>THONG TIN SÁCH</h2></caption>
    <tr>
      <th>id sách</th>
      <th>title sách</th>
      <th>info sách</th>
      <th>giá sách</th>
      <th>giá khuyến mãi</th>
      <th>publisher</th>
    </tr>
    <?php foreach ($books as $book): ?>
      <tr>
        <td><?php echo $book[0] ?></td>
        <td><?php echo $book[2] ?></td>
        <td><?php echo $book[5] ?></td>
        <td><?php echo $book[6] ?></td>
        <td><?php echo $book[7] ?></td>
        <td><?php echo $book[8] ?></td>
      </tr>
    <?php endforeach ?>
  </table>
<?php endif ?>
<?php   @$pdo->NULL; ?>
</body>
</html>