<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trắc nghiệm tính cách</title>
	<style>
		* {
			margin: 0px;
			padding: 0px;
		}

		.content {
			width: 800px;
			padding: 10px;
			border: 2px solid #ddd;
			height: auto;
			margin: 20px auto;
		}

		.content h1 {
			color: red;
			text-align: center;
			padding: 10px 0px;
		}

		.question {
			font-size: 18px;
			line-height: 24px;
		}

		.question p {
			font-size: 20px;
			line-height: 30px;
		}

		.question p span {
			font-weight: bold;
		}

		.question ul li {
			list-style-type: none;
			padding-left: 40px;
		}

		.content input[type="submit"] {
			margin: 0 auto;
			display: block;
			height: 40px;
			width: 100px;
			border-radius: 5px;
			font-weight: bold;
			font-size: 18px;
		}
	</style>
</head>
<body>
<?php 
	require_once 'function_question.php';
	require_once 'function_option.php';
	$newArr = [];
	foreach ($arrQuestions as $key=>$value) {
		$newArr[$key]['question'] = $value['question'];
		$newArr[$key]['sentences'] = $arrOptions[$key];
	}

?>

<div class="content">
	<h1>Trắc nghiệm tính cách</h1>
	<form action="result.php" method="POST" name="mainForm">
		<?php 
		$id = 1;
		foreach ($newArr as $key=>$value) {
			echo '<div class="question">';
			echo '<p><span>Câu hỏi '.$i.':<span>'.$value['question'].'</p>';
			echo '<ul>';
			foreach ($value['sentences'] as $keyC=>$valueC) {
				echo '<li><label><input type="radio" name="'.$key.'" value="'.$valueC["point"].'">'.$valueC['option'].'</label></li>';
			}
			echo '</ul>';
			$i++;
			echo '</div>';
		}
		?>
		<input type="submit" name="submit" value="Kiểm tra">
	</form>
</div>
</body>
</html>