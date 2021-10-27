<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 
  <link rel="stylesheet" href="jquery-ui-1.12.1.custom/jquery-ui.css">
  <script src="jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
  <script src="jquery-ui-1.12.1.custom/jquery-ui.js"></script> -->

   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <link rel="stylesheet" href="/resources/demos/style.css">
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <style type="text/css">
    input, button{
      padding:5px;
      font-size:20px;
      border-radius: 5px;
      border:1px solid gray;
    }
    button{
      padding:5px 10px;
    }
    input:focus, button:focus{
      outline:none;
    }
  </style>
  <script>
    $( function() {
      $( "#date-start" ).datepicker({ dateFormat: "dd/mm/yy" });
      $( "#date-end" ).datepicker({ dateFormat: "dd/mm/yy" });
    } );
  </script>
</head>
<body>
<?php 
  $dateStart = (isset($_POST['date-start']))?$_POST['date-start']:'';
  $dateEnd = (isset($_POST['date-end']))?$_POST['date-end']:'';
?>
<form action="#" method="post" id="mainForm" name="mainForm">
  <p>Start:
    <input type="text" name="date-start" readonly="readonly" id="date-start" value="<?php echo $dateStart; ?>">
  </p>
  <p>End:
    <input type="text" name="date-end" readonly="readonly" name="date-end" id="date-end" value="<?php echo $dateEnd; ?>">
  </p>
  <p><input type="submit" name="" value="Submit"></p>
</form>
<?php 
  function compareDate($dateStart, $dateEnd){
    $arrDateStart = date_parse_from_format('d/m/Y', $dateStart);
    $tsStart = mktime(0,0,0, $arrDateStart['month'], $arrDateStart['day'], $arrDateStart['year']);
    $arrDateEnd = date_parse_from_format('d/m/Y', $dateEnd);
    $tsEnd = mktime(0,0,0, $arrDateEnd['month'], $arrDateEnd['day'], $arrDateEnd['year']);
    $result = 0;
    if ($tsEnd >$tsStart ) {
      $result = 1;
    }else if ($tsEnd<$tsStart) {
      $result = -1;
    }
    return $result;
  }
  if ($dateStart != null && $dateEnd != null) {
    if (compareDate($dateStart, $dateEnd) == 0  ) {
      echo 'Start = End';
    }else if (compareDate($dateStart, $dateEnd) == 1) {
      echo 'Start < End';
    }else {
      echo 'Start > End';
    }
    
  }
?>
</body>
</html>