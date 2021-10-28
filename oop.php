<?php
// final 
class Fruit {
  // Properties
  public $name;
  public $color;
  //public- 可以从任何地方访问属性或方法。这是默认的

  // Methods
  // final 
  public function __construct($name,$color) {
    $this->name = $name;
    $this->color = $color;
    // $this->size = $size;
    //$this->name的准确含义？
    //The $this keyword refers to the current object, and is only available inside methods.$this 
    //关键字指的是当前对象，并且只能在方法内部使用。
    //逻辑关系还是不明白?
    //-> 该符号表示的含义？
  }

  // function get_name() {
  //   return $this->name;
  // }

  // function set_color($color){
  //     $this->color = $color;
  // }

  // function get_color(){
  //     return $this->color;
  // }

  // function get_size(){
  //   return $this->size;
  // }

  // public function __destruct(){
    // echo "The fruit is {$this->name} and the color is {$this->color}.<br>";
    // echo "The fruit is {$this->name} and the color is {$this->color} and the size is {$this->size}.";
    //有两个问题 1、为什么先给apple赋值却是最后显示？
    //           2、destruct可以逐条显示
  // }

  public function intro(){
    echo "The fruit is {$this->name} and the color is {$this->color}.<br>";
  }

  // protected function intro(){
  //   echo "The fruit is {$this->name} and the color is {$this->color}.<br>";
  // }
  
}

class Strawberry extends Fruit {
  public $weight;
  public function __construct($name, $color, $weight){
    $this->name = $name;
    $this->color = $color;
    $this->weight = $weight;
  }

  public function intro(){
    echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
  }

  // public function message() {
    // echo "Am I a fruit or a berry? <br>";
    // $this -> intro();
  // }
}

// $apple = new Fruit("Apple", "red", "small");
// $banana = new Fruit("Banana", "Yellow", "small");
// $watermelon = new Fruit("Watermelon", "green", "big");
$strawberry = new Strawberry("Strawberry", "red", "500");
// $strawberry->message();
$strawberry->intro();


//Objects of a class is created using the new keyword.类的对象是使用new关键字创建的。

// $apple->set_name('Apple');
// $apple->set_color('red');

// $banana->set_name('Banana');
// $banana->set_color('yellow');

// echo $apple->get_name();
// echo "<br>";
// echo $apple->get_color();
// echo "<br>";
// echo $apple->get_size();
// echo "<br>";
// echo $banana->get_name();
// echo "<br>";
// echo $banana->get_color();
// echo "<br>";
// echo $banana->get_size();
// echo "<br>";
// echo $watermelon->get_name();
// echo "<br>";
// echo $watermelon->get_color();
// echo "<br>";
// echo $watermelon->get_size();
// echo "<br>";

// var_dump($apple instanceof Fruit);
// echo "<br>";
// var_dump($banana instanceof Fruit);
// echo "<br>";
// var_dump($watermelon instanceof Fruit);
// echo "<br>";

?>