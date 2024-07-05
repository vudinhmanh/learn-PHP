<!-- 
Regular Expression Functions
+ preg_match($pattern, $subject, $matches): return 1 nếu match và trả về 0 nếu ko match
    $pattern là chuỗi Regex Pattern
    $subject là chuỗi nguồn để chúng ta so khớp với $pattern
    $matches là danh sách kết quả trả về đúng khi so khớp 2 chuỗi trên
+ preg_match_all(): tìm kiếm số lần match 
+ preg_replace(): thực hiện tìm kiếm và thay thế bằng cách sử dụng các mẫu biểu thức chính quy.  
-->
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $checkEmail = "/^[\w\-\.]+@([\w\-]+\.)+[\w\-]{2,4}$/";
    if (preg_match($checkEmail, $_POST['email'])) {
      echo "Địa chỉ email hợp lệ <br>";
    } else {
      echo "Địa chỉ email không hợp lệ <br>";
    }
  }
  //Ví dụ tìm số lần xuất hiện của 1 chuỗi con trong chuỗi cha sử dụng preg_match_all()
  $str = "Vu Dinh Manh";
  $pattern = "/Dinh/i";
  echo preg_match_all($pattern, $str);
  //Thay thế các kết quả khớp của chuỗi con trong chuỗi cha ửu dụng preg_replace()
  $text = "Vu Dinh Manh";
  $patt = "/Manh/i";
  echo preg_replace($patt, "Nam", $text);
?>
<form action="" method="post">
  <label for="email">Email</label>
  <input type="text" name="email" id="email">
  <label for="password">Password</label>
  <input type="password" name="password" id="password">
  <button type="submit">Gửi</button>
</form>


