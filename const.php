<?php
    //const

    // class Goodbye{
    //     const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
    //     public function byebye(){
    //         echo self::LEAVING_MESSAGE;
    //     }
    // }

    // $goodbye = new Goodbye();
    // $goodbye->byebye();

    // echo Goodbye::LEAVING_MESSAGE;



    //Abstrac

    Parent class
    abstract class Car {
        public $name;
        public function __construct($name) {
        $this->name = $name;
        }
        abstract public function intro() : string;

        // :string 是什么意思？
        
    }
    
    // Child classes
    class Audi extends Car {
        public function intro() : string {
        return "Choose German quality! I'm an $this->name!";
        }
    }
    
    class Volvo extends Car {
        public function intro() : string {
        return "Proud to be Swedish! I'm a $this->name!";
        }
    }
    
    class Citroen extends Car {
        public function intro() : string {
        return "French extravagance! I'm a $this->name!";
        }
    }
    
    // Create objects from the child classes
    $audi = new audi("Audi");
    echo $audi->intro();
    echo "<br>";
    
    $volvo = new volvo("Volvo");
    echo $volvo->intro();
    echo "<br>";
    
    $citroen = new citroen("Citroen");
    echo $citroen->intro();

    


    //another abstract

    // abstract class ParentClass {
    //     abstract protected function prefixName($name);
    // }
    // class ChildClass extends ParentClass {
    //     public function prefixName($name){
    //         if ($name == "John Doe"){
    //             $prefix = "Mr.";
    //         }elseif($name == "Jane Doe"){
    //             $prefix = "Mrs.";
    //         }else{
    //             $prefix ="";
    //         }
    //         return "{$prefix}{$name}";
    //     }
    // }

    // $class = new ChildClass;
    // echo $class->prefixName("John Doe");
    // echo "<br>";
    // echo $class->prefixName("Jane Dos");

    // abstract class ParentClass {
    //     // Abstract method with an argument
    //     abstract protected function prefixName($name);
    //   }
      
    //   class ChildClass extends ParentClass {
    //     public function prefixName($name) {
    //       if ($name == "John Doe") {
    //         $prefix = "Mr.";
    //       } elseif ($name == "Jane Doe") {
    //         $prefix = "Mrs.";
    //       } else {
    //         $prefix = "";
    //       }
    //       return "{$prefix} {$name}";
    //     }
    //   }
      
    //   $class = new ChildClass;
    //   echo $class->prefixName("John Doe");
    //   echo "<br>"; 
    //   echo $class->prefixName("Jane Doe");
      

    
?>