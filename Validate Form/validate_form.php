<!-- 
- Validate form Client: html js
- Validate form Server: php 
-->

<?php
  if(!empty($_POST)) {
    $error = [];
    if(empty($_POST['name'])) {
      $error['fullname']['require'] = 'Họ tên không được để trống';
    }
    else 
    {
      if(strlen($_POST['name']) < 5) {
        $error['fullname']['length'] = 'Họ tên phải nhập trên 5 ký tự';
      }
    }
    if(empty($_POST['email'])) {
      $error['email']['require'] = 'Email không được để trống';
    }
    else 
    {
      if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $error['email']['invaild'] = 'Email không hợp lệ';
      }
    }
    
    if(empty($error)) {
      echo 'Gửi thành công';
    }
    else 
    {
      echo 'Các trường dữ liệu không hợp lệ';
    }

    echo '<pre>';
    print_r($error);
    echo '</pre>';
  }
?>
<form action="" method="post">
  <p>
    Họ tên
    <input type="text" name="name">
    <?php
      if (!empty($error['fullname']['require'])) {
          echo $error['fullname']['require'];
      } else {
          echo '';
      }
    ?>
  </p>
  <p>
    Email
    <input type="text" name="email">
    <?php
    if (!empty($error['email']['require'])) {
        echo $error['email']['require'];
    } else {
        echo '';
    }
    ?>
  </p>
  <button type="submit">Gửi</button>
</form>