<?php 
  $filepath = 'test/';
  // $array = glob($filepath, GLOB_ONLYDIR);
  // $array = glob($filepath);
  // echo '<pre>'.print_r($array).'</pre>';
  $currPath = getcwd();
  echo $currPath;
  // chdir('test');
  $currPath = getcwd();
  echo $currPath.'<br>';
  $array = glob('*');
  $dir = dir('..');
  // chdir('../');
  // while(($file = $dir->read())!=false){
  //   echo 'Ten tập tin: '.$file.'<br>';
  // }
  while (($file = $dir->read())!= false) {
      echo 'Ten tập tin: '.$file.'<br>';
  }
?>