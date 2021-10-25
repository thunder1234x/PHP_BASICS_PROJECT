<?php 

interface TestInterface{
    // can have constant , methods but not variables
    const MY_CONSTANT = "RAKESH";
    public function log(string $message);
    public static function staticLog(string $message);

}

interface TestInterface2{

    public function log(string $message):string;

}

class Test implements TestInterface , TestInterface2{
    public $inf;

    public function __construct($ref)
    {
        $this->inf = $ref;
    }

    public function log(string $message):string{
        return "Hi From Class Test " . TestInterface::MY_CONSTANT.PHP_EOL;
    }

    public static function staticLog(string $message){
        return "Hi From Static Method Of Test " . TestInterface::MY_CONSTANT.PHP_EOL;
    }
   
    public function __toString(){
        return "".serialize($this);
    }
}

$obj = new Test('abc');
echo $obj->log('error');
echo TestInterface::MY_CONSTANT.PHP_EOL;
echo Test::staticLog('abc');
?>