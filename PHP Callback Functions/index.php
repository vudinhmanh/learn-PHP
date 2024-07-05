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
function hello($callback) {
  $callback;
}
hello(function (){
  echo "hello";
});
?>