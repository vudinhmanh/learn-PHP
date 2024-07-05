<!-- 
 abstract class là một lớp không thể khởi tạo mà nó được sử dụng để định nghĩa các phương thức mà các lớp con bắt buộc phải
implements
 -->
<?php
abstract class Animal {
  protected $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function mackeSound();// Một abstract method được định nghĩa
}
class Cat extends Animal {
  //implements method mackeSound
  public function mackeSound() {
    echo "Meow";
  }
}
class Dog extends Animal {
  //implements method mackeSound
  public function mackeSound() {
    echo "Gau gau";
  }
}
$cat = new Cat("Simmy");
$dog = new Dog("Simmy");
?>