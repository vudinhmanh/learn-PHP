<!-- 
PHP Filters dùng để xác thực và lọc dữ liệu bên ngoài
- filter_list(): trả về 1 mảng chứa tên các filter có sẵn của PHP 
- filter_var($value, $filter, $options): Kiểm tra và lọc 1 biến với một filter cụ thể
  param
+ $value: giá trị cần được kiểm tra
+ $filter: loại filter cần áp dụng
  1. FILTER_VALIDATE_EMAIL: validate xem có phải là 1 địa chỉ email không
  2. FILTER_VALIDATE_URL: validate xem có phải là 1 địa chỉ url hợp lệ
  3. FILTER_VALIDATE_DOMAIN: validate độ dài của domain có hợp lệ không
  4. FILTER_VALIDATE_IP: validate địa chỉ IP
  5. FILTER_VALIDATE_INT: validate các giá trị có là kiểu int ko
  6. FILTER_VALIDATE_FLOAT: validate các giá trị có là kiểu float hay không 
+ $options: các tuỳ chọn bổ sung cho filter. Có thể là 1 mảng hoặc hằng số
- filter_input(): Kiểm tra và lọc 1 biến đầu vào từ GET, POST, hoặc COOKIE
- filter_input_array(): kiểm tra và lọc 1 mảng từ biến đầu vào từ GET, POST hoặc COOKIE
- filter_var_array(): Kiểm tra và lọc 1 mảng các biến
-->

<!-- <table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  foreach (filter_list() as $id =>$filter) {
    echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
  ?>
</table> -->

<?php
  //sử dụng filter_var để check email
  $email = "12312312312312332123@gmail.com";
  if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'email is valid <br>';
  }
  else 
  {
    echo 'email is invalid <br>';
  }
  //sử dụng filter_var để làm sạch url loại bỏ các ký tự dư thừa
  $url = "http://www.example.com/?name=John&age=25";
  $sanitized_url = filter_var($url, FILTER_SANITIZE_URL);
  echo $sanitized_url ."<br>";
  //sử dụng filter_var để sanitze và lấy ra số nguyên
  $string = "123123manh";
  $number = filter_var($string, FILTER_SANITIZE_NUMBER_INT);
  echo $number;
?>