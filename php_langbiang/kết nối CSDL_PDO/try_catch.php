<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Thông tin người dùng</title>
</head>
<body>
<?php 
  try {
    $pdo = new PDO('mysql:host=localhost;dbname=chickenrainshop',"root","");
    $pdo->query("SET NAMES UTF8");
    $sql = "select * from users";
    $users = $pdo->query($sql);
  } catch (PDOException $ex) {
    die($ex->getMessage());
  }
?>
<?php if ($users->rowcount() > 0 ): ?>
  <table width="90%" border="0" cellspacing="5" cellpadding="5" align="center">
    <caption><h2>THÔNG TIN NGƯỜI DÙNG</h2></caption>
    <tr>
      <th>username</th>
      <th>password</th>
      <th>email</th>
      <th>firstname</th>
      <th>lastname</th>
      <th>address</th>
      <th>phone number</th>
    </tr>
    <?php foreach ($users as $user): ?>
      <tr>
        <td><?php echo $user['username'] ?></td>
        <td><?php echo $user['password'] ?></td>
        <td><?php echo $user['email'] ?></td>
        <td><?php echo $user['firstname'] ?></td>
        <td><?php echo $user['lastname'] ?></td>
        <td><?php echo $user['address'] ?></td>
        <td><?php echo $user['phone_number'] ?></td>
      </tr>
    <?php endforeach ?>
  </table>
<?php endif ?>
<?php $pdo = NULL; ?>
</body>
</html>