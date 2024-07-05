<!-- 
- Superglobals trong PHP: luôn có thể truy cập từ bất kì hàm, lớp hoặc tệp nào
- $GLOBALS là 1 mảng chứa tất cả các global variables 
- $_SERVER là 1 biến toàn cục chứa thông tin về các biến môi trường, thông tin máy chủ và các yêu cầu từ http client
- $_REQUEST là 1 biến toàn cục chứa dũw liệu của form đã gửi và dữ liệu cookie, nó là 1 mảng chứa dữ liệu từ $_GET, 
$_POST và $_COOKIE
- $_POST chứa 1 mảng các biến được nhận thông qua method POST
- $_GET chứa 1 mảng các biến được nhận thông qua method GET
-->
<?php
  $x = 100;
  function myF() {
    echo $GLOBALS['x']. "<br>";// sử dụng biến toàn cục
  }
  myF();
  echo $_SERVER['PHP_SELF'] . "<br>";
  echo $_SERVER['SERVER_NAME']. "<br>";
  echo $_SERVER['HTTP_HOST']. "<br>";
  echo $_SERVER['HTTP_REFERER']. "<br>";
  echo $_SERVER['HTTP_USER_AGENT']. "<br>";
  echo $_SERVER['SCRIPT_NAME']. "<br>";
  //form gửi dữ liệu
?>
<form action="demo_request.php" method="post">
  <label for="">Name</label>
  <input type="text" name="name">
  <label for="">Class</label>
  <input type="text" name="class">
  <button type="submit">Gửi</button>
</form>