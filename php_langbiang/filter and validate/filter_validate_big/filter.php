<?php 
  echo '<pre>'.print_r($_POST).'</pre>';
  $filters = [
    'name'=>[
        'filter'=>FILTER_CALLBACK,
        'options'=>'ucwords'
    ],
    'age'=>[
        'filter'=>FILTER_VALIDATE_INT,
        'options'=>['min_range'=>1, 'max_range'=>100]
    ],
    'email'=>[
        'filter'=>FILTER_VALIDATE_EMAIL
    ]
  ];
  $result = filter_input_array(INPUT_POST, $filters);
  echo '<pre>'.print_r($result).'</pre>';
  // if (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
  //   echo 'Email không hợp lệ';
  // }else {
  //   echo 'Email hợp lệ';
  // }
?>