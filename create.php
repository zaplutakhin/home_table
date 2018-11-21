<?php
require_once 'connection.php';
$create = $_POST['str'];

$sql = "CREATE TABLE IF NOT EXISTS `$create` (
    `number` INT NOT NULL AUTO_INCREMENT, 
    `name` VARCHAR(40) NOT NULL, 
    `otherField` VARCHAR(100) NOT NULL, 
    PRIMARY KEY (`number`)) ";
    $pdo->exec($sql);
    echo "Новая таблица создана.";
    echo '<p><button><a href="index.php">Назад</button></p>';
    
?>