<!-- 
 Phương thức POST
+ Client gửi lên: Phương thức POST sẽ gửi dữ liệu qua một cái form  html và các giá trị sẽ được
định nghĩa trong các input và sẽ được nhận dạng thông qua name của các input đó
+ Server nhận dữ liệu: Tất cả các dữ liệu gửi bằng phương thức POST đều được lưu trong 1 biến toàn
cục $_POST do PHP tạo ra 
-->
<form action="" method="post">
  <input type="text" name="fullName" placeholder="Họ tên">
  <input type="text" name="class" placeholder="Lớp">
  <button type="submit">Gửi</button>
</form>
<?php
  echo '<pre>';
  print_r($_POST);
  echo '</pre>';
?>
