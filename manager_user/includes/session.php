<?php

if(!defined('_CODE')) {
  die( 'Access denied');
}
function setSession($key, $val) {
  return $_SESSION[$key] = $val;
}
function getSession($key='') { 
  if(empty($key)) {
    return $_SESSION;
  } else {
    if(isset($_SESSION[$key])) {
      return $_SESSION[$key];
    }
  }
}
function removeSession($key='') {
  if(empty($key)) {
    session_destroy();
    return true;
  } else {  
    if(isset($_SESSION[$key])) {
      unset($_SESSION[$key]);
      return true;
    }
  }
}
//Hàm gắn flash data
function setFlashData($key, $val) {
  $key = 'flash_' .$key;
  return setSession($key, $val);
}
//Hàm đọc flash data
function getFlashData($key) { 
  $key = 'flash_' .$key;
  $data = getSession($key);
  removeSession($key);
  return $data;
}