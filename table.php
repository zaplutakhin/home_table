<?php 
$i=0;
include 'structure.php';
echo "<p>Таблица: <b>$_POST[path]<b></p>";
?>

<html lang="ru">
  <head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css" >
  </head>
<body>

<table border="1">
<tr>
<td><b>Поле</b></td>
<td><b>Тип</b></td>
</tr>

<?php while ($i < $a) { ?>

<tr>
<td>
<?php 
echo $array[$i]['Field'];
if ($a > 1) {
?>
  <p><form action="remove.php" method="POST">
    <input type="hidden" name="field" value="<?php echo $array[$i]['Field'];?>">
    <input type="hidden" name="table" value="<?php echo $currenttable?>">
    <input type="submit" name="del" value="Удалить">
  </form></p>
</td>

<?php } ?>
<td>

<?php echo $array[$i]['Type'];?>
  <p><form action="updatefield.php" method="POST">
    <input type="hidden" name="field" value="<?php echo $array[$i]['Field'];?>">
    <input type="hidden" name="table" value="<?php echo $currenttable?>">
      <select name="selecttype">
      <option value="varchar(50)">varchar(50)</option>
      <option value="integer(5)">integer(5)</option>
      </select>
    <input type="submit" name="upd" value="Изменить">
    </form></p>
</td>
</tr>

<?php
$i++; 
}
if ($a == 1) {
?>
  <p><form action="droptable.php" method="POST">
    <input type="hidden" name="table" value="<?php echo $currenttable?>">
    <input type="submit" name="del" value="Удалить таблицу">
  </form></p>

<?php
}
?>
</table>


<p><button><a href="index.php">Назад</button></p>

          
              
                    
