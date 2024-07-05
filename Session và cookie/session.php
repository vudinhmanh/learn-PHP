<!--
* KHÁI NIỆM 
- Session chính là phiên làm việc của người dùng
- Session trong PHP được lưu trên server
- Khi trình duyệt dóng session sẽ bị huỷ 
* KHỞI TẠO SESSION TRONG PHP
- Để sử dụng session trong php phải chạy hàm session_start() trước
- syntax: $_SESSION[$name] = $value
-->
<?php
session_start();
$_SESSION['username'] = 'admin';
// xoá dữ liệu session
unset($_SESSION['username']);
// huỷ session
session_destroy();