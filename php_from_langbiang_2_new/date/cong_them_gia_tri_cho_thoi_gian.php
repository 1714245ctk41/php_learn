<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Thời gian</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript">
    $(function(){
      $("#date").datepicker({dateFormat: "dd/mm/yy"});
    });
  </script>
</head>
<body>
<?php 
  function createSelectbox($name, $attributes, $array, $keySelect){
    $xhtml = '';
    if (!empty($array)) {
      $xhtml .= '<select name="'.$name.'" id="'.$name.'" style="'.$attributes.'">';
      foreach ($array as $key=>$value) {
        
      
      if ($key == $keySelect) {
        $xhtml .= '<option value="'.$key.'" selected="selected">'.$value.'</option>';
      }else {
        $xhtml .='<option value="'.$key.'">'.$value.'</option>';
      }
      }
      $xhtml .='</select>';
    }
    return $xhtml;
  }

  function addTime($date, $format, $type, $value){
    $arrDate = date_parse_from_format('format', $date);
    switch ($type) {
      case 'Day':
        $ts = mktime(0, 0, 0, $arrDate['month'], $arrDate['day'] + $value, $arrDate['year']);
        break;
      case 'Month':
        $ts = mktime(0, 0, 0, $arrDate['month']+$value, $arrDate['day'], $arrDate['year']);
        break;
      case 'Year':
        $ts = mktime(0, 0,0, $arrDate['month'], $arrDate['day'], $arrDate['year'] + $value);
        break;
      default:
        // code...
        break;
    }
    $result = date($format, $ts);
    return $result;
  }

  $arrtypes = ['---select type---', 'Day', 'Month', 'Year'];
  $date = (isset($_POST['date']))? $_POST['date']:'';
  $type = (isset($_POST['select-type'])) ? $_POST['select-type'] : '';
  $value = (isset($_POST['value'])) ? $_POST['value'] : '';

  $strTypes = createSelectbox('select-type', 'width: 150px', $arrtypes, $type);
  $result = addTime($date, 'd/m/Y', $arrtypes[$type], $value);

?>
<form action="#" method="POST" id="mainForm" name="mainForm">
  <p>Date:
    <input type="text" name="date" readonly="readonly" id="date" value="<?php echo $date; ?>">
  </p>
  <p>Type: <?php echo $strTypes; ?></p>
  <p>Value: 
    <input type="text" name="value" id="value" value="<?php echo $value; ?>">
  </p>
  <p><?php echo $result; ?></p>
  <p><input type="submit" name="Submit"></p>
</form>

</body>
</html>