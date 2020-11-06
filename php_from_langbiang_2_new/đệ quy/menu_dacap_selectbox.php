<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
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

  function deQuyLevel($array, $parent, $level, &$newArray){
    //diều kiện dừng
    if (count($array > 0 )) {
      foreach ($array as $key=>$value) {
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
  $menu1 = [];
  deQuyLevel($menu, 0, 1, $menu1);
  function createSelectbox ($array, $selected = 0, $name, $style = null, $size = 0) {
  $xhtml = '<select name="'. $name . 'id="' . $name . '" style="' . $style . '" size="' . $size . '">';
  foreach($array as $key => $value) {
      $strSelected = '';
      if ($value['id'] == $selected) {
        $strSelected = 'selected="selected"';
      }
      if ($value['level'] == 1) {
        $xhtml .= '<option value="' . $value['id'] . '"' . $strSelected . '>+' . $value['name'] . '</option>';
      } else {
        $name = str_repeat('&nbsp;', 4 * ($value['level'] - 1)) . '-' . $value['name'];
        $xhtml .= '<option value="' . $value['id'] . '"' . $strSelected . '>' . $name . '</option>';
      }
    }
  $xhtml .= '</select>';
  return $xhtml;
}
  echo createSelectbox($menu1, 1, 'selectbox', 'min-width: 200px; padding: 3px; margin: 10px', 15);
?>
</body>
</html>