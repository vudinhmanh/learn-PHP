<?php
if(!defined('_CODE')) {
  die('Access denied');
}
try{
  if(class_exists('PDO')) {
    $dsn = 'mysql:dbname='._DB.';host='._HOST;
    $option= [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    ];
    $connection = new PDO($dsn, _USER, _PASS, $option); 
  }
}
catch(Exception $e) {
  echo''.$e->getMessage().'';
}
