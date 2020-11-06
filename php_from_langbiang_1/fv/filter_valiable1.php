<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
$array=['name'=>'nguyen van a', 'age'=>123, 'email'=>'1714245ctk@gmail.com'];
$filter=['name'=>['filter'=>FILTER_CALLBACK, 'options'=>'ucwords'],
		'age'=>['filter'=>FILTER_VALIDATE_INT, 'options'=>['min_range'=>1,'max_range'=>1000]],
		'email'=>['filter'=>FILTER_VALIDATE_EMAIL]
			
];
$result=filter_var_array($array, $filter);
echo '<pre>';
print_r($result);
echo '</pre>';
echo '<hr>';
echo '<pre>';
print_r($_POST);
echo '</pre>';
echo '<hr>';

$filters=['name'=>['filter'=>FILTER_CALLBACK, 'options'=>'ucwords'],
		'age'=>['filter'=>FILTER_VALIDATE_INT, 'options'=>['min_range'=>1, 'max_range'=>1000]],
		'email'=>['filter'=>FILTER_VALIDATE_EMAIL]
];
$result=filter_input_array(INPUT_POST, $filters);
echo '<pre>';
print_r($result);
echo '</pre>';
echo '<hr>';
echo ini_get('date.timezone');
ini_set('date.timezone', 'Asia/Ho_Chi_Minh');
echo '<br>';
echo ini_get('date.timezone');
$config=ini_get_al();
echo '<pre>';
print_r($config);
echo '</pre>';

?>
</body>
</html>