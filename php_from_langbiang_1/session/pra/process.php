<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h3 class="text-center">process</h3>
<?php
  // kiểm tra dữ liệu khác rỗng

  function checkEmpty($value) {
    $flag = false;
    if (!isset($value) || trim($value) == '') {
      $flag = true;
    }
    return $flag;
  }

session_start();
if(isset($_SESSION['flagPermission'])){
	if(time()-20>$_SESSION['timeout']){
		session_unset();
		header('location:index.php');
	}else{
		echo '<h3>Xin chào: '.$_SESSION['fullname'].'</h3>';
		echo '<a href="logout.php">Đăng xuất</a>';
	}
}else{
	if(!checkEmpty($_POST['username'])&&!checkEmpty($_POST['password'])){
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		$data=parse_ini_file('users.ini');
		if(array_key_exists($username, $data))
		{
			$userInfo=explode('|', $data[$username]);
			if($username==$userInfo[0]&&$password==$userInfo[1]){
				$_SESSION['fullname']=$userInfo[2];
				$_SESSION['flagPermission']=true;
				$_SESSION['timeout']=time();
				echo '<h3>Xin chao: '.$_SESSION['fullname'].'</h3>';
				echo '<a href="logout.php">Đăng xuất</a>';
			}else{
				header('location:index.php');
			}
		}else{
			header('location:index.php');
		}
	}else{
		header('location:index.php');
	}
}

?>
</body>
</html>