<?php

class Test{

    public $subject;
    static private $marks;
    private $blood_gp ;
    static $grades = ['A',"B","C","E","O"] ;

    const SUB_NAME_MATH = "MATH";  //constant can be accessed by class reference


    public function __construct($sub_name){
        $this->subject = $sub_name;
        $this->blood_gp = "A+";   //private member can be accessed by this keyword inside class only
    }
    
    public function setMarks($marks){
        self::$marks = $marks;
        $this->blood_gp ="O-";
    }

    public function getMarks(){
        echo self::$marks;
        $this->blood_gp = "AB+";
    }
}

// var_dump(Test::$grades);
$obj = new Test(Test::SUB_NAME_MATH);
var_dump($obj);

$obj->setMarks(54);
var_dump($obj);

echo $obj->getMarks().PHP_EOL;
var_dump($obj);

?>