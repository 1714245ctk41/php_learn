<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<div class="container">
	<?php 
	file_put_contents('logout.php', null);
	if(isset($_COOKIE['fullname'])){
		echo '<h3>Xin chào: '.$_COOKIE['fullname'].'</h3>';
		echo '<a href="logout.php">Đăng xuất</a>';
	}else{?>
		<h3 class="text-center">Login</h3>
		<div class="row">
			<div class="col-md4 col-md-offset-4">
				<form action="process.php" method="post">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" id="username" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" id="password" name="password" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary">Đăng Nhập</button>
				</form>
			</div>
		</div>
		<?php 
	}
		?>
</div>	
</body>
</html>