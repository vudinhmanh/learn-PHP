<!-- 
* HÀM ĐỂ CHUYỂN JSON THÀNH OBJECT HOẶC ARRAY
+ json_decode(
    string $json,
    ?bool $associative = null,
    int $depth = 512,
    int $flags = 0
): mixed 
+ Parameters
  $json: chuỗi JSON
  $associative = null: nhận 2 giá trị nếu là true trả về kết quả là 1 mảng nếu false trả về object
  $depth: giới hạn độ sâu của mảng/đối tượng lồng nhau trong json
  $flags: Các tùy chọn bitmask để điều khiển hành vi giải mã.

* CHUYỂN MẢNG VỀ JSON
+ json_encode(mixed $value, int $flags = 0, int $depth = 512): string|false
+ Parameters
  value: biến cần chuyển về json
  flags: các tùy chọn bitmask để điều khiển hành vi mã hóa
  depth: giới hạn độ sâu của mảng/đối tượng lồng nhau
-->
<?php
// Chuyển mảng về định dạng json
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
echo json_encode($age);
// Chuyển json về dạng mảng
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($jsonobj));
echo '<br>';
// Truy cập vào các giá trị sau khi chuyển từ json về mảng
$item = json_decode($jsonobj);
echo $item->Peter;