<?php
require_once 'connection.php';
$nameField = $_POST['field'];
$table = $_POST['table'];
$sqlTxt = "ALTER TABLE $table DROP $nameField;";
$count = $pdo->query($sqlTxt);
echo 'Столбец успешно удален';
echo '<p><button><a href="index.php">Назад</button></p>';