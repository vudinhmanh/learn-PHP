<!-- 
 1 Phương thức GET
+ Client gửi lên: Phương thức get là phương thức gửi dữ liệu thông qua đường dẫn url
+ Server nhận dữ liệu: Tất cả dữ liệu mà client gửi lên bằng phương thức GET đều được lưu trong
1 biến toàn cục mà PHP tự tạo ra đó là biến $_GET, biến này là kiểu mảng kết hợp lưu trữ danh sách
dữ liệu từ client gửi lên theo quy luật key => value 
-->
<?php
if(isset($_GET['name'])) {
  echo $_GET['name'];
} else {
  echo 'name khong ton tai';
}