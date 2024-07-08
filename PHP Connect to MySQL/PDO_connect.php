<!-- 
  Kết nối mySQL sử dụng PDO
  connection = ('mysql:dbname='.$_DB.';host='.$_HOST, $_USER, $_PASS, $options); 
  $options
  + PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'  Set utf8
  + PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION   Tạo thông báo ra ngoại lệ khi gặp lỗi
-->
<?php
const _HOST = 'localhost';
const _DB = 'test';
const _USER = 'root';
const _PASS = '';
try {
  if(class_exists('PDO')) 
  {
    $dsn = 'mysql:dbname='._DB.';host='._HOST;
    $connection = new PDO($dsn, _USER, _PASS);
    var_dump(($connection));
  } 
} 
catch (Exception $e) 
{
  echo ''. $e->getMessage();
  die();
}