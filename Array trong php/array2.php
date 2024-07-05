<?php
//Mảng đa chiều php
$arr1 = [
  'add1' => [
    'name' => 'Manh',
    'class' => 'HTTT01'
  ],
  'add2' => [
    'name' => 'Nam',
    'class' => 'HTTT02'
  ],
  'add3' => 'HaUI'
];
//Đọc mảng tuần tự
foreach($arr1 as $key => $values) {
  if(is_array($values)) {
    foreach($values as $key => $value) {
      echo "$value". " ";
    }
  }
  else {
    echo "$values"." ";
  }
}