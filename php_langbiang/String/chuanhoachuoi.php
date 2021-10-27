<?php 
	$str = ' nGuyeN   Van tEo  ';
	function formatString($str, $type = null){
		$str = strtolower($str);
		$str = trim($str);
		$array = explode(' ', $str);
		foreach ($array as $key=>$value) {
			if (trim($value) == null) {
				unset($array[$key]);
				continue;
			}
			if ($type = 'danh-tu') {
				$array[$key] = ucwords($str);
			}
		}
		$result = implode(' ', $array);
		$result = ucfirst($result);
		return $result;
	}
	echo $result = formatString($str, 'danh-tu');
?>