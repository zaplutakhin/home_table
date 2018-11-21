<?php
// Подключение к MySQL
$servername = "localhost"; // локалхост
$username = "azaplutakhin"; // имя пользователя
$password = "neto1877"; // пароль если существует
$dbname = "azaplutakin"; // база данных

// Создание соединения и исключения
try {
   $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);

   // Установить режим ошибки PDO в исключение
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   // Созданние базы данных
   $sql = "CREATE DATABASE azaplutakhin";

   // Используйте exec (), поскольку результат не возвращается
   $conn->exec($sql);
   echo "База данных создана успешно<br>";
   }
catch(PDOException $e) // класс исключения
   echo $sql . "<br>" . $e->getMessage();
   }

// Закрыть подключение
$conn = null;
?>