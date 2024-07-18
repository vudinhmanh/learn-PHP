<?php
const _MODULE = 'home';
const _ACTION = 'dashboard';
const _CODE = true;
//Thiết lập host
define('_WEB_HOST','http://'.$_SERVER['HTTP_HOST'].'/learnPHP/manager_user');
define('_WEB_HOST_TEMPLATES',_WEB_HOST.'/templates');
//Thiết lập path (đường dẫn tới từng thư mục)
define('_WEB_PATH',__DIR__);
define('_WEB_PATH_TEMPLATES',_WEB_PATH.'\templates');
//Thông tin kết nối db
const _HOST = 'localhost';
const _DB = 'user_management';
const _USER = 'root';
const _PASS = '';


