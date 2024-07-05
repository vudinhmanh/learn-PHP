<!-- 
 - Cookie là chuỗi thông tin được lưu ở trình duyệt người dùng được dùng để theo dõi, lưu lại lịch
sử người dùng, tăng sự trải nghiệm
- Thiết lập Cookie trong PHP
+ setcookie(name, value, expire, path, domain, secure, httponly);
  name: Tên Cookie
  value: Giá trị Cookie
  expire: Thời gian sống của cookie(Tính theo timesamp) u + path: Đường dẫn cookie hoạt động
  domain: Tên miền cookie hoạt động
  security: Cookie hoạt động khi có HTTTPS
  httponly: Chỉ cho phép gửi cookie qua giao thức HTTP 
-->
<?php
//set cookie
setcookie('user', 'manh', time() + 86400, '/');
// đọc cookie
// echo $_COOKIE['user'];
// xoá cookie
setcookie('user', 'manh', time() - 3600, '/');