<?php
require_once 'connection.php';
$i=1;
$showall = $pdo->query("SHOW TABLES from $db");
echo "<table>Список таблиц в базе <b>$db:</b>";
foreach ($showall as $key => $value) {
    foreach ($value as $table){ 
          echo "<p><table>Таблица: <b>$table</b> &nbsp ";
          ?>
          <form action="table.php" method="post">
            <input type="hidden" name="path" value="<?php echo $table?>" >
            <input type="submit" name="view" value="Открыть">
         </form>
        <?php $i++;
    }
}
?>
<html lang="ru">
  <head>
    <title></title>
    <meta charset="utf-8">
  </head>
<body>
<p> <form action="create.php" method="post">
  <input type="text" name="str">
  <input type="submit" value="Создать таблицу">
 </form></p>
</body>