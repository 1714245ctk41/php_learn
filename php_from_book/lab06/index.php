<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>iteration</title>
</head>
<body>
	<table style="border:1px; padding:3px">
		<tr>
			<td>Distance</td>
			<td>Cost</td>
		</tr>
		<?php
		$distance=50;
		while($distance<=250){
			echo'<tr>';
			echo'<td style="text-align:right">'.$distance.'</td>';
			echo'<td style="text-align:right">'.($distance/10).'</td>';
			echo"</tr>\n";
			$distance+=50;
		}
		?>
	</table>
</body>
</html>