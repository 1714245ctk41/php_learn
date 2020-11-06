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
if(isset($_POST['id'])){
	$id=$_POST['id'];
	@unlink('./files/'.$id.'txt');
	$flag=true;
}
?>
<div class="wrapper">
	<div class="heading">DELETE FILE</div>
	<?php 
	if($flag==false){
	?>
	<div id="form">
		<form action="#" method="post">
			<div class="row">
				<p>Tập tin</p>
				<span><?php echo realpath('./files/'.$id.'.txt'); ?></span>
			</div>
			<div class="row">
				<p>Tiêu đề</p>
				<span><?php echo $title; ?></span>
			</div>
			<div class="row">
				<p>Mô tả:</p>
				<span><?php echo $description; ?></span>
			</div>
			<div class="row">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<input type="submit" value="Xóa">
				<input type="button" value="Hủy" id="btnHuy">
			</div>
		</form>
		<?php 
	}else{
		echo '<p>Đã xóa được tập tin. Bấm vào <a href="index.php">Đây</a> để về trang chủ.</p>';
		?>
	}
	</div>
</div>
</body>
</html>