<?php
require_once 'connection.php';
$showall = $pdo->query("SHOW TABLES from $db");
$i=1;
foreach ($showall as $key => $value) {
    foreach ($value as $table){
          $q = $pdo->prepare("SHOW COLUMNS FROM $table");
          $q->execute();
          $table_fields = $q->fetchAll();
          foreach ($table_fields as $fields) {
              $tables[$i] = $table;
            if (isset($_POST['path']) and $_POST['path'] == $table) {
                $field[$i]=$fields['Field'];
                $type[$i]=$fields['Type'];
                
                $i++;
            } 

        }
    }
}

?>
