<?php
require_once 'connection.php';
$nameField = $_POST['field'];
$tables = $_POST['table'];
$sqlTxt = "ALTER TABLE $tables DROP COLUMN $nameField;";
$count = $pdo->query($sqlTxt);
echo 'Столбец успешно удален';
echo '<p><button><a href="index.php">Назад</button></p>';