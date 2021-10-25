<?php 

class MagicConstant{

    public $name ;
    private $number ;

    public function __construct($name , $number) {
        $this->name = $name;
        $this->number = $number;
    }


    // if any property requested is not a part of object then this magic method invoked
    public function __get($propName) 
    {
        if ($propName === "username") {
            return $this->name;
        }
    }


    //if any property requested to set , is not a part of object then this magic method invoked
    public function __set($propName, $value){
        if ($propName === "username") {
            // var_dump($value);
            return $this->setName($value);
        }
    }
    

    // this magic method invoke when a called function not found in class
    public function __call($method, $args){
        if($method == 'setPhoneNumber'){
             // call_user_func_array takes calleable and arguments here $this is object from that called function
            // setName is a method of that object and $args is the arguments array passed setName function
            // return call_user_func_array([$this , 'setNumber'], $args);
            return call_user_func_array([$this , 'setNumber'],$args);
        }else if($method == 'getNumber'){
            return $this->number;
        }
        echo "No Method Found Named \"$method \" ";
    }


    //this method called if called static function not found in class
    public static function __callStatic($name, $arguments)
    {   
        throw New Exception("No Method Found Named \"$name\"".PHP_EOL);
        // echo "No Method Found Named \"$name\"".PHP_EOL;
    }


    //invoke method called when object used as a function 
    public function __invoke($method){
        var_dump($method);
        echo " From Invoke Method".PHP_EOL;
    }


    // this magic method invoked before serialize called
    public function __sleep()
    {
        echo "Sleep Magic method called before serialize".PHP_EOL;
        unset($this->number);
        return ['name'];
    }


    // this magic method invoked after unserialize called
    public function __wakeup()
    {
        echo "Sleep Magic method called after un-serialize".PHP_EOL;
        $this->name = "Thunder-X";
    }


    // method invoke when a object cloning occured
    public function __clone()
    {
        var_dump($this);
        
    }


    public function SetName($value){
        $this->name = $value[0];
    }


    public function setNumber($value){
        $this->number = $value;
    }


    public function __toString() {    // magic constant method for convert object into string 
        return "This Is Object Of MR. \"$this->name\" And M.No : \"$this->number\"";
    }

}


$obj = new MagicConstant('Rakesh' , '8250337469');
// echo $obj->username.PHP_EOL;
// var_dump($obj);
// $obj->username = ["Biswa",'Nath'];
// $obj->setPhoneNumber(7602232294);
// echo "Updated Number is :: " , $obj->getNumber().PHP_EOL;
// echo $obj.PHP_EOL;
// MagicConstant::update();

// $obj(['name'=>"MR_X",'number'=>"1001001001",'gender'=>'male']); // object calling as a function with args

// $obj_ser = serialize($obj); // serialize makes the object instance into a string
// var_dump($obj);
// $obj_un_ser = unserialize($obj_ser);  // unserialize does the opposite
// var_dump($obj_un_ser); // two object $obj and $obj_un_ser are different

$clone_obj = clone $obj;
// var_dump($clone_obj);
?>
