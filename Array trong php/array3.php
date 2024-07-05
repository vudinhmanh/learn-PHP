<?php
//Các hàm xử lý mảng
$arr = ['html', 'css', 'js', 'php', 'vuejs', 'lavarel'];
$arr2 = [
  'add1' => 'mot',
  'add2' => 'hai',
  'add3' => 'ba',
  'add4' => 'bon',
  'add5' => 'nam',
  'add6' => 'sau'
];
$lengthArr = count($arr); //Đếm số lượng phần tử cùa 1 mảng 
$arrayNew = array_values($arr2);// Đưa mảng về dạng tuần tự 0, 1, 2, 3, 4....
$arrayKey = array_keys($arr2);// Trả về mảng tuần tử với value là key
$lastArr = array_pop($arr2);// Trả về phần tử cuối cùng của mảng
$checkArr = is_array($arr2);// Hàm kiểm tra có là array ko
array_push($arr, 'bay', 'tam');// Thêm phần tử vào cuối mảng
array_shift($arr);//Xoá phần tử đầu tiên của mảng
array_unshift($arr, 'hi', 'hello');//Thêm phần tử vào đầu mảng
in_array('hi', $arr);//kiểm tra 1 mảng có giá trị value không
$sortArr = sort($arr);//hàm sắp xếp mảng theo chiều tăng dần
$arrRev = array_reverse($arr);// hàm trả về 1 mảng mới và đảo ngược lại nó
$mergeArr = array_merge($arr, $arr2);// hàm gộp nhiều mảng thành 1 mảng
$randArr = array_rand($arr, 3);// Hàm lấy ra key ngẫu nhiên
$searchArr = array_search('nam', $arr2);//hàm tìm kiếm giá trị của mảng và trả về key của phần tử đó
$getArr = array_slice($arr, 1, 3); //hàm lấy ra 3 phần tử từ phần tử thứ 1
$uniqueArr = array_unique($arr);  //hàm loại bỏ các phần tử trùng nhau và trả về 1 mảng mới
$searchKey = array_key_exists("add4", $arr2);// Hàm kiểm tra 1 mảng có tồn tại key không
echo '<pre>';
print_r($searchKey);
echo '</pre>';
