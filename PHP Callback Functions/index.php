<!-- 
CALLBACK FUNCTION
- là 1 hàm được truyền dưới dạng đối số cho 1 hàm khác
 -->
<?php
function my_callback($item) {
  return strlen($item);
}
$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("my_callback", $strings);// gọi lại fun my_callback để đếm số kí tự
print_r($lengths);

// sử dụng anonymous function như 1 callback function
function my_test($callback) {
  // Gọi hàm callback
  $callback();
}
// Truyền hàm ẩn danh như một callback function
my_test(function() {
  echo "Hello World!";
});
// hàm array_map áp dụng hàm callback cho mỗi phần tử để tính bình phương
function square($item) {
  return $item * $item;
}
$num = [1, 2, 3 , 4, 5, 6, 7, 8];
$square_num = array_map('square', $num);
echo "<br>";
print_r($square_num);
echo "<br>";
// hàm array_filter áp dụng hàm callback để lọc phần tử
// cách 1
function checkOddNum($item) {
  return $item % 2 ? true : false;
}
$oddNum1 = array_filter($num, 'checkOddNum');
print_r($oddNum1);
echo "<br>";
// cách 2: sử dụng anonymous function
$oddNum2 = array_filter($num, function($item){
  return $item % 2 ? true : false;
});
print_r($oddNum2);
?>