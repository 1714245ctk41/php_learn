<?php 
	$string = 'hello world';
	$string1 = 'xin chào thế giới';
	$double  = 1.2;
	$int = 1 . 2;
	echo gettype($double);
	echo gettype($int);
	echo '<br>'.strlen($string).' - '.mb_strlen( $string1, 'utf-8' );
	echo '<br>Sử dụng hàm str_word_count(): '.str_word_count($string).'<br>';
	echo '<br>Chuyển chữ thường thành chữ hoa: '.strtoupper($string).' - Ngược lại: '.strtolower($string).'<br>';
	echo '<br>Kí tự đầu tiên thành chữ hoa: '.ucfirst($string).' - Kí tự đầu trong mỗi từ: '.ucwords('john wick').'<br>';
	echo 'Vị trí đầu tiên xuất hiện: '.strpos($string, 'd').' - Vị trí xuất hiện cuối cùng: '.strripos($string, 'l');
	
	echo '<br>Đảo ngược chuỗi strrev(string): '.strrev($string);
	echo '<br>trích chuỗi con từ chuỗi mẹ substr(): '.substr($string, 3, 6);
	$string2 = '       Nguyễn        Văn       Tào  ';
	$string2 = trim($string2);
	$strarray = explode(' ', $string2);
	foreach ($strarray as $key =>$value) {
		echo $value;
	}
	$str = implode('', $strarray);
	echo $str;
	function truncateString($str, $maxChars = 50, $holder = '...'){
		$result = $str;
		if (strlen($str) >$maxChars) {
			$result = substr($str, 0, $maxChars).$holder;
		}
		return $result;
	}
	$str = 'name=teo&age=10';
	parse_str($str);
	echo '<br>'.$name.' - '.$age.'<br>';
	$url = 'http://210.245.126.171/Music/NhacTre/TinhYeu_LyMaiTrang/wma32/06_BienTham_TinhYeu_LyMaiTrang.wma';
	function getInfo01($str){
		//$array = parse_url($str);
		$array = explode('/', $str);
		$result = $array[count($array)-1];
		return $result;
	}
	echo getInfo01($url);
	function getInfo02($str){
		$index = strripos($str,'/');
		$result = substr($str, $index+1);
		echo $result;
		$result = explode('_', $result);
		$rearray = [];

		$rearray['ID'] = $result[0];
		$rearray['Name'] = $result[1];
		$rearray['Album'] = $result[2];
		$result1 = explode('.', $result[3]);
		$rearray['Singer'] = $result1[0] ;
		$rearray['Type'] = $result1[1];
		$cho = '';
		foreach ($rearray as $key=>$value) {
			$cho.=$key.' - '.$value.'<br>';
		}

		return $cho;
	}
	echo '<br>';
	echo '<pre>'.print_r(getInfo02($url)).'</pre><br>';
	$index = strripos($url,'/');
	echo substr($url, $index);
	echo '<br> Sử dụng str_pad($tr, 7, "t")<br>';
	$str = 'abc';
	$new_str = str_pad($str, 7, 'y');
	echo $new_str;
	$new_str1 = str_pad($str, 7, 't', STR_PAD_LEFT);
	echo ' - '.$new_str1;
	$shufflestring = str_shuffle($string);
	echo '<br>'.$shufflestring.'<br>';
	$str = 'abcdefgh';
	$array = str_split($str, 2);
	foreach ($array as $value) {
		echo $value.' - ';
	}
?>