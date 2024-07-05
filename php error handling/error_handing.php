<!-- 
PHP ERROR HANDLING
- die() function 
- error_function($error_level, $error_message, $error_file, $error_line, $error_line, error_context)
  param
+ error_level(required): Chỉ định mức báo lỗi do người dùng xác định (là 1 số nguyên)
+ error_message(required): Chỉ định thông báo lỗi do người dùng xác định
+ error_file(optinal): Chỉ định tên tệp xảy ra lỗi
+ error_line(optinal): Chỉ định dòng xảy ra lỗi
+ error_context(optinal): Chỉ định 1 mảng chứa mọi biến và giá trị của chúng được sử dụng khi xảy ra lỗi

- set_error_handler(): Hàm này sử dụng để thiết lập hàm error_function làm hàm xử lý lỗi mặc định
- trigger_error($error, &error_type): hàm giúp tạo ra lỗi tuỳ chỉnh ở cấp độ người dùng
  param
+ error
+ &error_type: E_USER_ERROR(việc thực thi tạm dừng), E_USER_WARNING(việc thực thi bị dừng lại), E_USER_NOTICE(default có thể là lỗi hoặc ko là lỗi)

-->
<?php
  if(file_exists("123.txt")) {
    $file = fopen("123.txt", 'r');
  }
  else 
  {
    die("ERROR: The file does not exist");//xử lý lỗi nếu file không tồn tại
  }

  //SỬ DỤNG error_function và set_error_handler
  //error handler function
  function customError($errno, $errstr) {
    echo "<b>Error:</b> [$errno] $errstr";
  }
  //set error handler
  set_error_handler("customError");
  //trigger error
  echo($test);

  //SỬ DỤNG trigger_error
  $test = 10;
  if($test >= 9) {
    trigger_error("Phải nhập nhỏ hơn 10", E_USER_WARNING);
    echo "123";
  }
?>