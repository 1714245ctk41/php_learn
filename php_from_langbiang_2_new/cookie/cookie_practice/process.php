<h3 class="text-center">Process</h3>
<?php 
  function checkEmpty($value){
    $flag = false;
    if (!isset($value) || trim($value) == '') {
      $flag = true;
    }
    return $flag;
  }
  if (isset($_COOKIE['fullname'])) {
    echo '<h3>Xin chào: '.$_COOKIE['fullname'].'</h3>';
    echo '<a href="logout.php">Đăng xuất</a>';
  }else {
    if (!checkEmpty($_POST['username']) && !checkEmpty($_POST['password'])) {
      $username = $_POST['username'];
      $password = md5($_POST['password']);
      $data = parse_ini_file('users.ini');
      if (array_key_exists($username, $data)) {
        $userInfo = explode('|', $data[$username]);
        if ($username == $userInfo[0] && $password == $userInfo[1]) {
          setcookie('fullname', $userInfo[2], time()+200);
          echo '<h3>Xin chào: '.$userInfo[2].'</h3>';
          echo '<a href="logout.php">Đăng xuất</a>';
        }else {
          echo 'sai mật khẩu';
          header('location:index.php');

        }
      }else {
        header('location:index.php');
      }
    }else {
      header('location:index.php');
    }
  }

?>