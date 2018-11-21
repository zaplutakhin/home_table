<html lang="ru">
  <head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css" >
  </head>
<body>
<form>
<table border="1">
<tr>
<td><b>Поле</b></td>
<td><b>Тип</b></td>
</tr>

<?php include 'showtable.php';
$y=1;
while ($y < $i) {
?>

<tr>
<td><p><b><?php echo $field[$y]?></b></p>
  <form action="removefield.php" method="POST">
    <input type="hidden" name="field" value="<?php echo $field[$y]?>">
    <input type="hidden" name="table" value="<?php echo $tables[$y]?>">
    <input type="submit" name="del" value="Удалить">
  </form>
</td>
<td><p><b><?php echo $type[$y]?></b></p>
  <form action="updatefield.php" method="POST">
    <input type="hidden" name="field" value="<?php echo $field[$y]?>">
    <input type="hidden" name="table" value="<?php echo $tables[$y]?>">
      <select name="selecttype">
      <option value="varchar(50)">varchar(50)</option>
      <option value="integer(5)">integer(5)</option>
      </select>
    <input type="submit" name="upd" value="Изменить">
    </form>
</td>
</tr>

<?php
$y++;
}
?>

<p><button><a href="index.php">Назад</button></p>

          
              
                    
