<?php 
  require_once 'connection.php';
  $currenttable = $_POST['path'];
  $sqlTxt = "SHOW COLUMNS FROM $currenttable";
  $count = $pdo->query($sqlTxt);
  $array = $count->fetchAll(PDO::FETCH_ASSOC);
  $a = count($array);
?>