<?php 
  session_start();
  session_unset();
  $_SESSION['var'] = 34432543;
  $session = session_encode();
  echo $session.'<br>';
  session_unset();
  echo 'session rỗng: '.'<pre>'.print_r($_SESSION).'</pre>';
  session_decode($session);
  echo 'session khôi phục: ';
  echo '<pre>'.print_r($_SESSION).'</pre>';
?>