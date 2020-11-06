<?php 
  try {
    $pdo = new PDO("mysql:host=localhost;dbname=wordpress_nuochoa", "root", "");
    $pdo->query("SET NAMES UTF8");
  } catch (EDOException $ex) {
    die($ex->getMessage());
  }
?>