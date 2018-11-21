<?php
require_once 'connection.php';
$table = $_POST['table'];
$sqlTxt = "DROP TABLE $table";
$count = $pdo->query($sqlTxt);
echo 'Таблица удалена';
echo '<p><button><a href="index.php">Назад</button></p>';