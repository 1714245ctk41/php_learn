<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>form</title>
	<style>
		.content{
			width:500px;
			border:1px solid red;
			text-align:center;
			padding-bottom:50px;
		}
		input{
			
		}
	</style>
</head>
<body>
<div class="content">
	<h1>PHP UPLOAD</h1>
	<form action="fileupload.php" method="POST" name="main-form" enctype="multipart/form-data">
		<input type="file" name="fileUpload" multiple>
		<input type="submit" value="submit" name="submit">
		<?php 
		echo '<p style="color:red">'.$error.'</p>';
		?>
	</form>
</div>
</body>
</html>