<!-- 
 4 lệnh: include, include_once, require, require_once dùng để import file php
khác vào php đang chạy
+ include: import file khác, nếu import lỗi => các câu lệnh bên dưới vẫn chạy
+ include_once: import file khác, chỉ import 1 lần, nếu import lỗi => các câu
lệnh bên dưới vẫn chạy
+ require: import file khác, nếu import lỗi => các câu lệnh bên dưới dừng
+ require_once: import file khác, chỉ import 1 lần, nếu import lỗi => các câu
lệnh bên dưới dừng  
-->
<?php
  // include_once ('index1111.php');
  require('index1231.php');
  echo "Van hoat dong";
?>