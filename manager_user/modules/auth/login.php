<?php
if(!defined('_CODE')) {
  die('Access denied');
}
$getTitle = [
  'pageTitle' => 'Đăng nhập'
];
layouts('header', $getTitle);
?>
<div class="row" >
  <div class="col-4 form-container">
    <h2>Đăng nhập user</h2>
    <form action="" method="post">
      <div class="form-group mg-form">
        <label for="">Email</label>
        <input name="email" type="email" class="form-control" placeholder="Địa chỉ email">
      </div>
      <div class="form-group mg-form">
        <label for="">Mật khẩu</label>
        <input name="password" type="password" class="form-control" placeholder="Mật khẩu">
      </div>
      <button type="submit" class="btn btn-primary btn-block btn-register">Đăng nhập</button>
      <p class="text-center"><a href="?module=auth&action=forgot">Quên mật khẩu</a></p>
      <p class="text-center"><a href="?module=auth&action=register">Đăng ký tài khoản</a></p>
    </form>
  </div>
</div>
<?php
 layouts('footer');
?>