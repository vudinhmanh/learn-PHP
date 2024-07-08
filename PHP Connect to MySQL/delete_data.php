<?php
require_once "PDO_connect.php";
$sql = "DELETE FROM students WHERE id = ?";
$id = 2;
try {
  $statement = $connection -> prepare($sql);
  $data = [$id];
  $deleteStatus = $statement -> execute($data);
  if ($deleteStatus) {
    echo "Xoá thành công";
  }
} catch (Exception $e) {
  echo "". $e->getMessage() ."";
}