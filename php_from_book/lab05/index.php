<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Bob's Auto Parts</h1>

	<?php
	define('TIREPRICES', 100);
	define('OILPRICES', 10);
	define('SPARKPRICES', 4);

	$tireqty=$_POST['tireqty'];
	$oilqty=$_POST['oilqty'];
	$sparkqty=$_POST['sparkqty'];
	$totalamount=$tireqty*TIREPRICES
				+$oilqty*OILPRICES
				+$sparkqty*SPARKPRICES;
	$find=$_POST['find'];
	switch($find){
		case "a":
			echo "<p>Regular customer.</p>";
			break;
		case "b":
			echo"<p>Customer referred by TV advert.</p>";
			break;
		case "c":
			echo"<p>Customer referred by phone directory</p>";
			break;
		case "d":
			echo"<p>Customer referred by word of mouth</p>";
		default:
			echo"<p>We do not know how this customer found us.</p>";
			break;
	}
	echo $tireqty." tires \n".$oilqty." oil\n".$sparkqty." spark plugs<br>";
	echo "Order processed.<br>";
	$date=date('H:i, js F Y');
	@$fp=fopen("text.txt","ab");
	if(!$fp)
	{
		echo"<p><strong>Your order could not be processed at this time. Please try again later.</strong></p></body></html>";
		exit;
	}
	$outputstring=$date."\t".$tireqty." tires\t".$oilqty." oil\t".$sparkqty." spark plugs\t".$totalamount."\t".$address."\n";
	fwrite($fp, $outputstring, strlen($outputstring));

	fclose($fp);
	?>
</body>
</html>