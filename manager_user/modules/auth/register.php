<?php
if (!defined('_CODE')) {
  die('Access denied');
}

$getTitle = [
  'pageTitle' => 'Đăng ký tài khoản'
];
layouts('header', $getTitle);
if (isPost()) {
  $filterData = filter();
  $errors = [];
  // Validate họ tên
  if (empty($filterData['name'])) {
    $errors['name'] = 'Họ tên không được để trống';
  } else {
    if (strlen($filterData['name']) < 4) {
      $errors['name'] = 'Họ tên phải dài hơn 4 ký tự';
    }
  }
  // Validate email
  if (empty($filterData['email'])) {
    $errors['email'] = 'Email không được để trống';
  } else {
    $emailInput = $filterData['email'];
    $sqlEmail = "SELECT id FROM user WHERE email = '$emailInput'";
    if (getRows($sqlEmail) > 0) {
      $errors['email'] = 'Email đã tồn tại';
    }
  }
  // Validate phone
  if (empty($filterData['phone'])) {
    $errors['phone'] = 'Số điện thoại không được để trống';
  } else {
    $checkPhone = '/(03|05|07|08|09|01[2|6|8|9])+([0-9]{8})\b/';
    if (!preg_match($checkPhone, $filterData['phone'])) {
      $errors['phone'] = 'Hãy nhập số điện thoại hợp lệ';
    } else {
      $phoneInput = $filterData['phone'];
      $sqlPhone = "SELECT id FROM user WHERE phone = '$phoneInput'";
      if (getRows($sqlPhone) > 0) {
        $errors['phone'] = 'Số điện thoại đã được đăng ký';
      }
    }
  }
  // Validate password
  if (empty($filterData['password'])) {
    $errors['password'] = 'Mật khẩu không được để trống';
  } else {
    $regexPass = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/";
    if (!preg_match($regexPass, $filterData["password"])) {
      $errors["password"] = "Mật khẩu phải gồm ít nhất 8 ký tự và phải có ít nhất 1 chữ cái và 1 chữ số";
    } else {
      if ($filterData['password'] !== $filterData['password_confirm']) {
        $errors['password_confirm'] = "Mật khẩu không giống nhau";
      }
    }
  }
  if(empty($errors)) {
    setFlashData('smg','Đăng kí thành công');
    setFlashData('smg_type','success');

  }
  else {
    setFlashData('smg','Vui lòng kiểm tra lại dữ liệu');
    setFlashData('smg_type','danger');
    setFlashData('errors',$errors);
    setFlashData('inputData',$filterData);
    redirect('?module=auth&action=register');
  }
}
$smg =  getFlashData('smg');
$smg_type = getFlashData('smg_type');
$errors = getFlashData('errors');
$inputData = getFlashData('inputData');
?>
<div class="row">
  <div class="col-4 form-container">
    <h2>Đăng ký user</h2>
    <?php
      if(!empty($smg)) {
        getSmg($smg, $smg_type);
      }
    ?>
    <form action="" method="post">
    <div class="form-group mg-form">
        <label for="">Họ tên</label>
        <input name="name" type="text" class="form-control" placeholder="Họ tên"
          value="<?= !empty($inputData['name']) ? $inputData['name'] : '' ?>"
        >
        <?php
          if(isset($errors['name'])) {
            echo '<span class="text-danger errorInput">' . $errors['name'] . '</span>'; 
          }
        ?>
      </div>
      <div class="form-group mg-form">
        <label for="">Email</label>
        <input name="email" type="email" class="form-control" placeholder="Địa chỉ email" 
          value="<?= !empty($inputData['email']) ? $inputData['email'] : '' ?>"
        >
        <?php
          if(isset($errors['email'])) {
            echo '<span class="text-danger errorInput">' . $errors['email'] . '</span>'; 
          }
        ?>
      </div>
      <div class="form-group mg-form">
        <label for="">Số điện thoại</label>
        <input name="phone" type="text" class="form-control" placeholder="Số điện thoại"
          value="<?= !empty($inputData['phone']) ? $inputData['phone'] : '' ?>"
        >
        <?php
          if(isset($errors['phone'])) {
            echo '<span class="text-danger errorInput">' . $errors['phone'] . '</span>'; 
          }
        ?>
      </div>
      <div class="form-group mg-form">
        <label for="">Mật khẩu</label>
        <input name="password" type="password" class="form-control" placeholder="Mật khẩu">
        <?php
          if(isset($errors['password'])) {
            echo '<span class="text-danger errorInput">' . $errors['password'] . '</span>'; 
          }
        ?>
      </div>
      <div class="form-group mg-form">
        <label for="">Xác nhận mật khẩu</label>
        <input name="password_confirm" type="password" class="form-control" placeholder="Xác nhận mật khẩu">
        <?php
          if(isset($errors['password_confirm'])) {
            echo '<span class="text-danger errorInput">' . $errors['password_confirm'] . '</span>'; 
          }
        ?>
      </div>
      <button type="submit" class="btn btn-primary btn-block btn-register">Đăng ký</button>
      <p class="text-center"><a href="?module=auth&action=login">Đăng nhập</a></p>
    </form>
  </div>
</div>

<?php
layouts('footer');
?>