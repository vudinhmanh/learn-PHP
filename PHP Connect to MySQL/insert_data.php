<?php
require_once "PDO_connect.php";
$sql = "INSERT INTO students(id, name) VALUES(:id, :name)";
try 
{
  $statement = $connection->prepare($sql);
  $id = '3';
  $name = 'nam';
  // $statement -> bindParam(':id', $id);
  // $statement -> bindParam(':name', $name);
  $data = [
    'id' => $id,
    'name'=> $name
  ];
  $insertStatus = $statement -> execute();
  var_dump($insertStatus);
}
catch (Exception $e) 
{
  echo ''. $e -> getMessage() .'';
}
