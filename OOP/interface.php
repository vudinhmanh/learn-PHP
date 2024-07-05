<!-- 
interface cho phép chỉ định những method mà 1 class cần implement
interface cho phép bạn sử dụng nhiều lớp khác nhau theo cùng 1 cách. Khi một hoặc nhiều class sử dụng cùng 1 interface gọi là polymorphism
interface không có properties còn abstract thì có
Tất cả các method interface phải là public còn abstract thì có thể là protected hoặc public 
-->
<?php
interface Animal {
  public function makeSound();
}
class Cat implements Animal {
  public function makeSound() {
    echo "Meow";
  }
}
class Dog implements Animal {
  public function makeSound() {
    echo "Gau gau";
  }
}
$cat = new Cat();
$dog = new Dog();
$cat->makeSound();
$dog->makeSound();
?>