<!-- 
 The PHP Date() Function
date(format, timestamp)
+ format: định dạng thời gian mà hàm sẽ trả về
+ timestamp: là 1 số nguyên timestamp nếu không truyền tham số sẽ lấy timestamp của thời điềm hiện tại 
-->
<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
echo "Hôm nay là: " .date('Y-m-d');
echo "<br>";
echo "Bây giờ là: " .date('H-i-s');
echo "<br>";
// Hàm strtotime() sẽ phân tích chuỗi thời gian bằng tiếng anh thành dạng timestamp của thời gian đó
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);