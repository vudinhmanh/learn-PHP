<?php
require_once "PDO_connect.php";
$sql = "UPDATE students SET id = :id, name = :name WHERE id = :id";
$id = 1;
$name = 'lan';
try {
  $statement = $connection -> prepare($sql);
  $statement -> bindParam(':id', $id);
  $statement -> bindParam(':name', $name);
  $updateStatus =  $statement -> execute();
  if ($updateStatus) {
    echo 'Update thành công';
  }
}
catch (Exception $e) {
  echo ''. $e -> getMessage() .'';
}
