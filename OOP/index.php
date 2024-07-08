<?php
// trait trong php cho phép tái sử dụng code trong nhiều lớp
trait Attack {
  public function attack($name) {
    echo "$name tấn công <br>";
  }
}
class Animal {
  public $name;
  public $age;
  public $weight;
  // Hàm khởi tạo
  public function __construct($name, $age, $weight) {
    $this->name = $name;
    $this->age = $age;
    $this->weight = $weight;
  }
  public function __destruct() {
    echo "Animal $this->name has been destroyed" . "<br>";
  }
}
// Class Cat kế thừa Animal, từ khoá parent để gọi __construct từ class cha
class Cat extends Animal {
  use Attack; // sử dụng trait Attack
  public static $color = "red"; // Khai báo 1 Static Properties cho phép gọi trực tiếp mà không cần tạo instance
  public function __construct($name, $age, $weight) {
    parent::__construct($name, $age, $weight);
  }
  public function __destruct() {
    echo "Cat $this->name has been destroyed";
  }
  public function Eat() {
    echo $this->name . " is eating" . "<br>";
  }
  // Phương thức static có thể gọi trực tiếp mà không cần tạo instance của class
  public static function makeSound($name) {
    echo "$name kêu meo meo <br>";
  }
}

$cat = new Cat("Simmy", 2, 5.0);
$cat->Eat();
$cat->attack("Simmy");
Cat::makeSound("Simmy"); // Gọi trực tiếp mà không cần tạo instance của class
echo Cat::$color; // Gọi trực tiếp thuộc tính mà không cần tạo instance của class
?>
