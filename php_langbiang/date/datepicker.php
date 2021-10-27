<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>jQuery UI Datepicker - Default functionality</title>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <link rel="stylesheet" href="/resources/demos/style.css">
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script>
  $( function() {
    $( "#datepicker" ).datepicker({
      dateFormat: "dd/mm/yy",
      defaultDate: "-1m",
      changeYear: true,
      yearRange: "2012:2020"
    });
  } );
  </script
  ></head>
  <body>
    <?php
    $date = (isset($_POST['datepicker'])) ? $_POST['datepicker'] : '';
    ?>
    <form action="#" method="post" id="mainForm" name="mainForm">
      <p>Date: <input readonly="readonly" type="text" name="datepicker" id="datepicker" value="<?php echo $date; ?>"></p>
      <input type="submit" value="Submit">   
    </form>
  </body>
  </html>