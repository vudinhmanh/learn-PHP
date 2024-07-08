<?php
require_once "PDO_connect.php";
$sql = "SELECT * FROM students WHERE id = ?";
$id = 1;
try {
  $statement = $connection -> prepare($sql);
  $arr = [$id];
  $statement -> execute($arr);
  $data = $statement -> fetchAll(PDO::FETCH_ASSOC);
  echo "<pre>";
  print_r($data);
  echo "</pre>";
}
catch (Exception $e) {
  echo "". $e->getMessage() ."";
}

