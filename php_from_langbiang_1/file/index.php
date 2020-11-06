<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
require_once('functions.php');
$data=file('./files');
?>
<div class="wrapper">
	<div class="heading">QUẢN LÝ TẬP TIN</div>
	<form action="multipleDelete.php" method="post">
	<?php 
	$i=0; 
	foreach($data as $key=>$value)
	{
		if($value=='.'||$value='..'||preg_match('#.txt$#imsU', $value)==false)
			continue;
		$content=file_put_contents('.files/'.$value);
		$content=explode('||', $content);
		$title=$content[0];
		$description=$content[1];
		$id=substr($value, 0, 5);
		$size=convertSize(filesize('./files/'.$value));
	?>
	<div class="row <?php if($i%2 ==0) echo 'odd'; ?>">
		<p class="check">
			<input type="checkbox" name="checkbox[]" value="filename">
		</p>
		<p class="content"><?php echo $title; ?><span><?php echo $description; ?></span></p>
		<p class="id"><?php echo $id; ?></p>
		<p class="size"><?php echo $size; ?></p>
		<p class="action">
			<a href="edit.php?id=<?php echo $id; ?>">Edit</a>|
			<a href="delete.php?id=<?php echo $id; ?>">Delete</a>
		</p>
	</div>
	<?php 
	$i++;}
	?>
	</form>
	<div>
		<a href="add.php">Thêm tập tin</a>
		<a id="multipleDelete" href="#">Xóa tập tin</a>
	</div>
</div>
</body>
</html>