<?php
session_start();
require_once "config.php";
require_once "./includes/connect.php";
require_once "./includes/sendmail/Exception.php";
require_once "./includes/sendmail/PHPMailer.php";
require_once "./includes/sendmail/SMTP.php";
require_once "./includes/base_function.php";
require_once "./includes/handle_user.php";
require_once "./includes/session.php";
$module = _MODULE;
$action = _ACTION;
// sendMail('nguyendactruong.haui@gmail.com','Đây là tiêu đề','Đây là nội dung');
if(!empty($_GET['module'])){
 if(is_string($_GET['module'])){
    $module = trim($_GET['module']);
 }
} 
if(!empty($_GET['action'])){
  if(is_string($_GET['action'])){
    $action = trim($_GET['action']);
  }
} 
$path = 'modules/'.$module.'/'.$action.'.php';
if(file_exists($path)){
  require_once $path;
} else {
  require_once 'modules/error/404_error.php';
}
