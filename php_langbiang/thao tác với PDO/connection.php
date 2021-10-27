<?php 
  try {
    $pdo = new PDO("mysql:host=localhost;dbname=langbiang_restaurant", "root", "");
    $pdo->query("SET NAMES UTF8");
  } catch (PDOException $ex) {
    die($ex->getMessage());
  }
?>