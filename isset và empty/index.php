<?php
/*
Hàm isset 
+ kiểm tra biến có tồn tại hay không
+ không kiểm tra về dữ liệu của biến
+ không kiếm tra được trường hợp null
hàm empty
+ Kiểm tra biến có tồn tại không và kiểu dữ liệu
+ Chỉ trả về boolean
*/
$bien1 = 'Vu Dinh Manh';
if(isset($bien1)) {
  echo $bien1;
}
$bien2;
if(!empty($bien2)) {
  echo $bien2;
} else {
  echo 'Bien rong';
}