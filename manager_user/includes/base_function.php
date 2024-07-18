<!-- Các hàm dùng chung cho toàn bộ project -->
<?php
if (!defined('_CODE')) {
  die('Access denied');
}
function layouts($layoutName = '', $getTitle = [])
{
  if (file_exists(_WEB_PATH_TEMPLATES . '/layout/' . $layoutName . '.php')) {
    require_once _WEB_PATH_TEMPLATES . '/layout/' . $layoutName . '.php';
  }
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

use function PHPSTORM_META\type;

//Hàm gửi mail
function sendMail($to, $subject, $content)
{
  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);
  try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth = true;                                   //Enable SMTP authentication
    $mail->Username = 'manhmanhmanh289@gmail.com';                     //SMTP username
    $mail->Password = 'ynoxmmjomzkowbmy';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    //Recipients
    $mail->setFrom('manhmanhmanh289@gmail.com', 'Vu Dinh Manh');
    $mail->addAddress($to);     //Add a recipient
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body = $content;
    $mail->send();
    echo 'Message has been sent';
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
function isGet() {
  if($_SERVER['REQUEST_METHOD'] == 'GET') {
    return true;
  }
  return false;
}
function isPost() {
  if($_SERVER['REQUEST_METHOD'] == 'POST') { 
    return true;
  }
  return false;
}
//Hàm filter lọc dữ liệu
function filter() {
  $filterArr = [];
  if(isGet()) {
    if(!empty($_GET)) { 
      foreach($_GET as $key => $value) {
        $key = strip_tags($key);
        if(is_array($value)) {
          $filterArr[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
        } else {
          $filterArr[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
        }
      }
    }
  }
  if(isPost()) {
    if(!empty($_POST)) {
      foreach($_POST as $key => $value) {
        if(is_array($value)) {
          $filterArr[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
        }
        else {
          $filterArr[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
        }
      }
    }
  }
  return $filterArr;
}
//Check email
function isEmail($email) {
  $checkEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
  return $checkEmail;
}
//Kiểm tra int
function isNumInt($number) {
  $checkNumber = filter_var($number, FILTER_VALIDATE_INT);
  return $checkNumber;
}
//Kiểm số float
function isNumFloat($number) {
  $checkNumber = filter_var($number, FILTER_VALIDATE_FLOAT);
  return $checkNumber;
}
//Hàm hiển thị lỗi

//Thông báo lỗi
function getSmg($smg, $type='success') {
  echo '<div class="alert alert-'.$type.'">';
  echo $smg;
  echo '</div>';
}
//Hàm chuyển hướng
function redirect($path='index.php') {
  header("Location: $path");
  exit;
}
//Hàm thông báo lỗi form input