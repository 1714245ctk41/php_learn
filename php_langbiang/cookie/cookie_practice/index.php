<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <?php 
    if (isset($_COOKIE['fullname'])) {
      echo '<h3>Xin chào: '.$_COOKIE['fullname'].'</h3>';
      echo '<a href="logout.php">Đăng xuất</a>';
    }else {
      ?>
<h3 class="text-center">Login</h3>
<div class="row">
  <div class="col-md-10 col-md-offset-4">
    <form action="process.php" method="post">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" id="username" class="form-control" autofocus>
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" id="password" class="form-control">
      </div>
      <button class="btn btn-primary" type="submit">Đăng nhập</button>
    </form>
  </div>
</div>
      <?php
    }
  ?>
</div>
</body>
</html>