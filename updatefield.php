<?php
require_once 'connection.php';
$newtype = $_POST['selecttype'];
$nameField = $_POST['field'];
$tables = $_POST['table'];
$sqlTxt = "ALTER TABLE $tables MODIFY $nameField $newtype";
$count = $pdo->query($sqlTxt);
echo "Изменен тип столбца на <b>$newtype</b>";
echo '<p><button><a href="index.php">Назад</button></p>';

