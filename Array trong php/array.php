<?php
//Khai báo mảng
$arr = array('html', 'css', 'js');
$arr2 = ['key1' => 'html', 'key2' => 'css', 'key3' => 'js'];
//Thêm 1 phần tử vào mảng
$arr2['key4'] = 'php';
//Thêm nhiều phần tử
array_push($arr2, 'python', 'C++');
//Xuất mảng
echo '<pre>';
print_r($arr2);
echo '</pre>';

//Đọc mảng
//1 Đọc trực tiếp từ key $ten_bien[key]
$readARR = $arr2['key3'];
echo 'Cách 1 đọc trực tiếp từ key: '.$readARR. '<br>';
//2 Dùng vòng lặp for
if(!empty($arr)) {
  echo 'Cách 2 đọc bằng for: ';
  for($i = 0; $i < count($arr); $i++) {
    echo $arr[$i]. ' ';
  }
  echo '<br>';
}
//3 Dùng vong lặp foreach
if(!empty($arr2)) {
  echo 'Cách 3 đọc bằng foreach: ';
  foreach($arr2 as $item) {
    echo $item. ' ';
  }
}
// Xoá phần tử
unset($arr2['key1']);
echo '<pre>';
print_r($arr2);
echo '</pre>';