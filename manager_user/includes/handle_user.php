<?php
if(!defined('_CODE')) {
  die('Access denied');
}
function query($sql, $data = [], $check=false) {
  global $connection;
  $res = false;
  try {
    $statement = $connection->prepare($sql);
    if(!empty($data)) {
      $res = $statement->execute($data);
    } else {
      $res = $statement->execute();
    }
  }
  catch(Exception $e) { 
    echo $e->getMessage();
    die();
  }
  if($check) {
    return $statement;
  }
  return $res;
}
function insert($table, $data) {
  $key = array_keys($data);
  $field = implode(',', $key);// các cột thêm dữ liệu
  $valTable = ":".implode(',:', $key);
  $sql = 'INSERT INTO ' .$table . '('.$field.')'.'VALUES'.'('.$valTable.')';
  $res = query($sql, $data);
  return $res;
}
function update($table, $data, $where='') {
  $update = '';
  foreach($data as $key => $val) {
    $update .= $key .'= :'. $key .',';
  }
  $update = trim($update,',');
  if(!empty($where)) {
    $sql = 'UPDATE ' .$table .' SET ' .$update .' WHERE ' .$where;
  } else {
    $sql = 'UPDATE ' . $table .' SET ' .$update;
  }
  $res = query($sql, $data);
  return $res;
}
function delete($table, $where='') { 
  if(empty($where)) {
    $sql = 'DELETE FROM ' .$table;
  } else {
    $sql = 'DELETE FROM ' .$table. ' WHERE ' .$where;
  }
  $res = query($sql);
  return $res;
}
function getAllUser($sql) {
  $res = query($sql,'',true);
  if(is_object($res)) {
    $dataFetch = $res->fetchAll(PDO::FETCH_ASSOC);
  }
  return $dataFetch;
}
//Hàm lấy 1 dòng dữ liệu
function oneRaw($sql) {
  $kq = query($sql,'',true);
  if(is_object($kq)) {
    $dataFetch = $kq->fetch(PDO::FETCH_ASSOC);
  }
  return $dataFetch;
}
//Hàm lấy nhiều dòng dữ liệu
function getRaw($sql) {
  $kq = query($sql,'',true);
  if(is_object($kq)) {
    $dataFetch = $kq->fetchAll(PDO::FETCH_ASSOC);
  }
  return $dataFetch;
}
//Đếm số dòng dữ liệu
function getRows($sql) {
  $kq = query($sql,'',true);
  if(!empty($kq)) {
    return $kq -> rowCount();
  }
}