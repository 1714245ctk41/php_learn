<?php 
  $filename = 'test/baitap1 - Copy.txt';
  if (file_exists($filename)) {
    echo 'the file is exists'.' : ';
    echo filetype($filename).' - size= '.filesize($filename);
  }else {
    echo 'the file is not exists';
  }
  function convertSize($size, $totalDigit=2, $ditance=''){
    $units = ['B', 'KB', 'MB', 'GB', 'TB'];
    $lenth = count($units);
    for ($i = 0; $i < $lenth; $i++) {
      if ($size > 1024) {
        $size /= 1024;
      }else {
        $unit = $units[$i];
        break;
      }
    }
    $result = round($size, $totalDigit).' '.$ditance.' '.$unit;
    return $result;
  }
  $size = filesize($filename);
  echo '<br>'.convertSize($size);
  echo '<br>'.basename($filename).' - '.basename($filename, '.txt');
  echo '<br>'.dirname($filename);
  $baseName = pathinfo($filename, PATHINFO_BASENAME);
  echo '<ul>';
  echo '<li>'.$baseName.'</li>';
  echo '<li>'.pathinfo($filename, PATHINFO_EXTENSION);
  echo '<li>'.pathinfo($filename, PATHINFO_DIRNAME);
  echo '<li>'.pathinfo($filename, PATHINFO_FILENAME);
  echo '</ul>';
  $datadir = file($filename);
  $stringdir = file_get_contents($filename);
  preg_match_all('#\S#imsU', $stringdir, $matches);

  echo '<pre>'.print_r($datadir).'</pre>';
  echo '<ul>';
  echo '<li> Tổng số dòng <b>'.count($datadir).'</b></li>';
  echo '<li> Tổng số Từ <b>'.str_word_count($stringdir).'</b></li>';
  echo '<li> Tổng số khoảng trắng <b>'.substr_count($stringdir, ' ').'</b></li>';
  echo '<li> Tổng số kí tự <b>'.count($matches[0]).'</b></li>';

  echo '</ul>';

  // $file1 = 'test/baitap1.txt';
  // $datafile1 = file_get_contents($file1).'<br>';
  // if(file_exists($filename)){
  //   $stringdir1 = file($filename);
    
  //   file_put_contents($filename, $datafile1, FILE_APPEND);
  // }else {
  //   echo 'File không tồn tại';
  // }
  // echo file_get_contents($filename); 
  // $pathfile = 'test/cacbaitext/baitap1Copy(2).txt';
  // $pathfilenewname = 'test/baitap1Copy(2).txt';
  // rename($pathfile, $pathfilenewname );
  // $pathfilenew = 'test/baitap1Copy(2).txt';
  // rename($pathfile, $pathfilenew);
  // file_put_contents('test/bancopycua_taitap1.txt', '');
  // copy('test/baitap1.txt', 'test/bancopycua_taitap1.txt');

?>