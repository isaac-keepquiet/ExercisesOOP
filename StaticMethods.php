<?php
    class greeting{
        public static function welcome(){
            echo "Hello World!<br>";
        }

        public function __construct(){
            self::welcome();
        }
    }

    new greeting();

    class SomeOtherClass{
        public function message(){
            greeting::welcome();
        }
    }
    //如何调用SomeOtherClass？



    class domain{
        protected static function getWebsiteName(){
            return "W3Schools.com<br>";
        }
    }

    class domainW3 extends domain{
        public $websiteName;
        public function __construct(){
            $this->websiteName = parent::getWebsiteName();
        }
    }

    $domainW3 = new domainW3;
    echo $domainW3 -> websiteName;


    // using the self keyword and double colon (::)

    // class pi{
    //     public static $value = 3.14159;
    //     public function staticValue(){
    //         return self::Svalue;
    //     }
    // }

    // echo pi::$value;

    // $pi = new pi();
    // echo $pi->staticValue();
    // echo "<br>";

    class pi{
        public static $value=3.14;
    }
    class x extends pi{
        public function xStatic(){
            return parent::$value;
        }
    }

    // Get value of static property directly via child class
    echo X::$value;

    // or get value of static property via xStatic() method
    $x =new x();
    echo $x->xStatic();
    
?>