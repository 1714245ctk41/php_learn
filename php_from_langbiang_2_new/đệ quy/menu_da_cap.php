<?php 

 $menu = array();
  $menu[] = array('id' => 1, 'name' => 'Home', 'parent' => 0);
  $menu[] = array('id' => 2, 'name' => 'About', 'parent' => 0);
  $menu[] = array('id' => 3, 'name' => 'News', 'parent' => 0);
  $menu[] = array('id' => 4, 'name' => 'Products', 'parent' => 0);
  $menu[] = array('id' => 5, 'name' => 'Contact', 'parent' => 0);
  $menu[] = array('id' => 6, 'name' => 'Tin trong nước', 'parent' => 3);
  $menu[] = array('id' => 7, 'name' => 'Tin quốc tế', 'parent' => 3);
  $menu[] = array('id' => 8, 'name' => 'Công nghệ', 'parent' => 6);
  $menu[] = array('id' => 9, 'name' => 'Giáo dục', 'parent' => 6);
  $menu[] = array('id' => 10, 'name' => 'Y tế', 'parent' => 6);
  $menu[] = array('id' => 11, 'name' => 'Education', 'parent' => 7);
  $menu[] = array('id' => 12, 'name' => 'Breaking news', 'parent' => 7);
  $menu[] = array('id' => 13, 'name' => 'Software', 'parent' => 4);
   


 function deQuyLevel($array, $parent, $level, &$newArray) {
    // điều kiện dừng
    if (count($array) > 0) {
      foreach ($array as $key => $value) {
        if ($value['parent'] == $parent) {
          $value['level'] = $level;
          $newArray[] = $value;
          unset($array[$key]);
          $newParent = $value['id'];
          deQuyLevel($array, $newParent, $level + 1, $newArray);
        }
      }
    }
  }
  $menu1 = array();
 deQuyLevel($menu, 0, 1, $menu1);

 
  foreach ($menu1 as $key => $value) {
    if ($value['level'] == 1) {
      echo '<div style="border: 1px solid #ccc;">+' . $value['name'] . '</div>';
    } else {
      $padding = ($value['level'] - 1) * 20;
      $padding = 'padding-left:' . $padding . 'px';
      echo '<div style="border: 1px solid #ccc;'. $padding . '">-' . $value['name'] . '</div>';
    }
  }
?>