<?php 
  session_start();
  session_unset();
  $_SESSION['file'] = '
    <!DOCTYPE html>
       <html lang="en">
          <head>
            <meta charset="UTF-8">
            <title>PHP</title>
          </head>
          <body>
            <h1>This is a file</h1>
            <?php
              function checkNumber($number){
                return ($number%2?"số lẻ": "số chẵn");
              }?>
  ';
  eval('?>'.$_SESSION['file']);
  echo checkNumber(3);
?>