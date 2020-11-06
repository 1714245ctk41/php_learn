<?php
  $to = '1714245ctk41@gmail.com'; //tên hộp thư nhận email
  $subject = 'test mail';
  $message = 'content of email';
  $header = 'from:1512879ctk39@gmail.com';

  if (mail($to, $subject, $message, $header)) {
    echo 'thanh cong';
  } else {
    echo 'that bai';
  }
?>