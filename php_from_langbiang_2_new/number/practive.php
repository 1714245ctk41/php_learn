<?php 
  echo '<h2>Phân số tối giản</h2>';
  $fraction = '18/9';
  $arrFraction = explode('/', $fraction);
  $ts = $arrFraction[0];
  $ms = $arrFraction[1];
  function UCLN($n1, $n2){
    for ($i = 1; $i <= $n1; $i++) {
      if ($n1 % $i ==0) {
        $uclnN1[]=$i;
      }
    }
    for ($i = 1; $i <= $n2; $i++) {
      if ($n2% $i ==0) {
        $ulcnN2[] =$i;
      }
    }
    $temp = array_intersect($uclnN1, $ulcnN2);
    $result = max($temp);
    return $result;
  }
  function optimzeFraction($fraction){
    $arrFraction = explode('/', $fraction);
    $ucln = UCLN($arrFraction[0], $arrFraction[1]);
    $arrFraction[0] /=$ucln;
    $arrFraction[1] /=$ucln;
    return $arrFraction;
  }
  $ucln = UCLN($ts, $ms);
  $ts /=$ucln;
  $ms /=$ucln;
  echo $ts.' / '.$ms;
  
?>