<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Date</title>
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
</head>
<body>
<?php 
$test = getdate();
echo '<pre>'.print_r($test).'</pre>';
  if(isset($_POST['date'])){
    $date = isset($_POST['date'])?$_POST['date']:'0/0/0';
    echo '<p>Input: '.$date.'</p><br>';
    echo '<p>Chuyển từ dạng chuỗi về dạng mảng: ';
    $date1= date_parse_from_format('d-m-Y', $date);
    echo '<p>Chuyển từ dạng mảng sang timestamp(dạng số) và Định dạng theo ý muốn(dạng chuỗi)</p>';
    $timestamp = mktime(0, 0, 0, $date1['month'], $date1['day'], $date1['year']);
    echo 'Output: '.date('m-d-Y', $timestamp);
  }
?>
  <form method="post" action="exercise_1.php">
    <input type="text" name="date" value="<?php echo $date; ?>">
  </form>
<br>
<?php 
  $arrEn = array('Mon', 'Tue', 'Web', 'Thu', 'Fri', 'Sat', 'Sun');
  $arrVi = array('Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ nhật');
  $result = date('h:i A D, d-m-Y', time());
  echo $result.' - ';
  $result = str_replace($arrEn, $arrVi, $result);
  $result = str_replace(',',', ngày', $result);
  echo $result.'<hr>';
  echo 'Kiểm tra năm nhuận: ';
  $year = 2016;
  if (checkdate(2,29, $year)) {
    echo 'Là năm nhuận: ';
  }else {
    echo 'Không là năm nhuận: ';
  }echo $year.'<br>';
  $month = 2;
  $timestamp = mktime(0,0,0, $month, 1, $year);
  $totalDays = date('t', $timestamp);
  echo $totalDays.'<hr>';
  echo '<h2>Tính khoảng thời gian đã trôi qua tính từ một thời điểm </h2>';
  $timePost = '26/11/2016 16:06:05';
  echo 'thời gian bắt đầu: '.$timePost;

  $timeReply = '28/11/2016 18:08:06';
  echo '<br>Thời gian tiếp theo: '.$timeReply;
  //đổi thời gian từ chuỗi ->Mảng
  $arrPost = date_parse_from_format('d/m/Y H:i:s', $timePost);
  $arrReply = date_parse_from_format('d/m/Y H:i:s', $timeReply);
  //đổi thời gian từ mảng ->timestamp
  $tsPost = mktime($arrPost['hour'], $arrPost['minute'], $arrPost['second'], $arrPost['month'], $arrPost['day'], $arrPost['year']);
  echo '<br>'.$tsPost.'<br>';

  $tsReply = mktime($arrReply['hour'], $arrReply['minute'], $arrReply['second'], $arrReply['month'], $arrReply['day'], $arrReply['year']);
  echo $tsReply.'<br>';
  $interval = $tsReply - $tsPost;
  $result = '';
  switch ($interval) {
    case $interval< 60:
      $result = ($interval ==1)? $interval.' second ago': $interval.'seconds ago';
      break;
    case ($interval >=60 && $interval <3600):
      $minute = round($interval/60);
      $result = ($minute ==1 )? $minute.' minute ago': $minute.' minutes ago';
      break;
    case ($interval >= 3600 && $interval < 86400):
    $hour =round($interval/3600);
    $result = ($hour ==1)?$hour.' hour ago': $hour.' hours ago';
    break;
    case (round($interval/86400) ==1):
      $result = 'Yesterday at '.date('H:i:s', $tsReply);
      break;
    default:
      $result = date('d/m/Y\ \a\t H:I:s', $tsReply);
      break;
  }
  echo $result;
?>
</body>
</html>