<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>date</title>
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
    fieldset{
      margin-bottom:10px;
    }
  </style>
</head>
<body>
    <form action="#" method="post">
      <fieldset>
    <input type="date" name="number" autofocus>
    <button type="submit" name="submit">Click here</button>
    </fieldset>
    
  </form>
  <?php 
    $number = $_POST['number'];
    $arrayNumber = explode('/', $number);
    echo print_r($arrayNumber);
    $result = checkdate($arrayNumber[0], $arrayNumber[1], $arrayNumber[2]);
    echo $result.'<br>';
    $time = time();
    echo $time;
    $mktime = mktime(0,0,0,12/12/2015);
    echo '<br>'.$mktime;
    echo '<br>'.date('d/m/yy H:i:s', $time);
  ?>
  <hr>
  <?php 
    

    $gdate = getdate();
    
    while ($ex = each($gdate)) {
        echo $ex['key'].' - '.$ex['value'].'<br>';
    }
    echo '<br>Chuyển từ dạng chuỗi sang kiểu timestamp: '.date('d-m-Y', strtotime('26 November 2019'));
    $date = getdate();
    $timestamp = mktime(0, 0, 0, $date['month'], $date['day'], $date['year']);
    echo $timestamp;
  ?>


</body>
</html>