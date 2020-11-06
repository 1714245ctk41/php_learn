<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>pagination</title>
	<style type="text/css">
		.content{
			margin:10px auto;
			width:800ps;
			text-align:center;
			border:1px solid red;
			padding: 20px;
		}
		.pages a{
			display:inline-block;
			width:40px;
			background:green;
			color:white;
			text-decoration:none;
		}
	</style>
</head>
<body>
  <div class = "content">
    <div class = "pages">
      <a href = "index.php?page=1">1</a>
      <a href = "index.php?page=2">2</a>
      <a href = "index.php?page=3">3</a>
      <a href = "index.php?page=4">4</a>
      <a href = "index.php?page=5">5</a>
      <a href = "index.php?page=6">6</a>
      <a href = "index.php?page=7">7
      </a>
    </div>
    <?php
      $page = (isset($_GET['page']) == true) ? $_GET['page'] : 0;
    ?>
    <p>Bạn đang ở trang thứ <?php echo $page; ?></p>
  </div>
</body>