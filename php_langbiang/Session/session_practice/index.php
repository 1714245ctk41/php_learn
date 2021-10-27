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
      session_start();
      if (isset($_SESSION['flagPermission'])) {
        if (time()-20>$_SESSION['timeout']) {
          session_unset();
          header('location:index.php');
        }else {
        echo '<h3>Xin chào: '.$_SESSION['fullname'].'</h3>';
        echo '<a href="logout.php">Đăng xuất</a>';
      }
    }else {
        ?>
    <h3 class="text-center">Login</h3>
    <div class="row">
      <div class="col-md-10 col-md-offset-4">
        <form action="process.php" method="post">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" id="username">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" id="password">
          </div>
          <button type="submit" class="btn btn-primary">Đăng nhập</button>
        </form>
      </div>
    </div>
        <?php
      }
    ?>

  </div>
</body>
</html>