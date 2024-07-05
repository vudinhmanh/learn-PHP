<!-- 
- readfile(): hàm để đọc file
- fopen($file, $Modes): hàm để dọc file và cung cấp nhiều tuỳ chọn hơn dựa vào tham số $model
  Các Modes để đọc file
+ r: mở file chỉ đọc
+ w: mở file để ghi. Xoá nội dung của tệp hoặc tạo tệp mới nếu nó không tồn tại
+ a: mở file để ghi và dữ liệu được bảo tồn, tạo 1 tệp mới nếu tệp không tồn tại
+ x: tạo 1 file mới chỉ ghi, return false và báo lỗi nếu file đã tồn tại
+ r+: mở file để đọc/ghi
+ w+: mở file để đọc/ghi. Xoá nội dung của tệp hoặc tạo tệp mới nếu nó không tồn tại
+ a+: mở file để đọc/ghi và dữ liệu được bảo tồn, tạo 1 tệp mới nếu tệp không tồn tại
+ x+: tạo file để đọc/ghi, return false và báo lỗi nếu file đã tồn tại
- fread(): đọc 1 file đang mở
- fclose(): đóng 1 file đang mở
- fgets(): đọc 1 dòng từ 1 file
- feof(): kiểm tra xem đạt đến cuối tệp tin chưa
- fgetc(): đọc một ký tự từ 1 tệp
 -->
<?php
  echo readfile("php_co_ban.txt");
?>