<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
	<script src="js/jquery.js"></script>
	<script>
		$(document).ready(function(){
			$('#btnHuy').click(function(){
				window.location='index.php';
			});
		});
	</script>
</head>
<body>
<?php 
require_once('function.php');
$id=$_GET['id'];
$content=file_get_contents('./files/'.$id.'.txt');
$content=explode('||', $content);
$title=$content[0];
$description=$content[1];
$flag=false;
$errorTitle='';
$errorDescription='';
if(isset($_POST['title'])&&isset($_POST['description']))
{
	$title=$_POST['title'];
	$description=$_POST['description'];
	if(checkEmpty($title))
		$errorTitle='<p class="error">Tiêu đề không được để trống</p>';
	if(checkLength($title)){
		$errorTitle.='<p class="error">Tiêu đề dài từ 5 đến 100 kí tự</p>';
	}
	if(checkEmpty($description)){
		$errorDescription='<p class="error">Mô tả không được để trống</p>';
	}
	if(checkLength($description, 10, 500))
	{
		$errorDescription.='<p class="error">Mô tả dài từ 10 đến 500 kí tự</p>';
	}
	if($errorTitle=='' &&$errorDescription==''){
		$data=$title.'||'.$description;
		$filename='./files/'.$id.'.txt';
		if(file_put_contents($filename, $data)){
			$title='';
			$description='';
			$flag=true;
		}
	}
}
?>
<div class="wrapper">
	<div class="heading">ADD FILE</div>
	<div id="form">
		<form action="#" method="post">
			<div class="row">
				<p class="title">Tiêu đề</p>
				<input type="text" name="title" value="<?php echo $title; ?>">
				<?php echo $errorTitle; ?>
			</div>
			<div class="row">
				<p class="title">Mô tả</p>
				<textarea name="description" id="" cols="100" rows="5"><?php echo $description; ?></textarea>
				<?php echo $errorDescription; ?>
			</div>
			<div class="row">
				<input type="submit" value="Lưu">
				<input type="button" value="Hủy" id="btnHuy">
			</div>
			<?php 
			if($flag==true)
				{echo '<div class="row">Ghi dữ liệu thành công</div>';}
			?>
		</form>
	</div>
</div>
</body>
</html>