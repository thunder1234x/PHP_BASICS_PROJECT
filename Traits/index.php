<?php

trait Flyable{
    //can have method , variables but not constants
    public $species="Duck ";
    public function introduce(){
        return "Hello , I belongs To Flyable Trait.".PHP_EOL;
    }
}

trait Machine{
    //can have method , variables but not constants
    abstract public function hello();
    public function introduce(){
        return "Hello , I belongs To Machine Trait.".PHP_EOL;
    }
}

class Bird{
    use Flyable;
}

class FlyingCar{
    use Flyable , Machine{     // when name collison occur in two traits using same class
        Machine::introduce insteadof Flyable;
        Flyable::introduce as bird_introduce;
    }
    public function hello(){
        echo "I am abstract one ".PHP_EOL;
    }
}

// $obj_fly = new Bird();
// echo $obj_fly->species;
// echo $obj_fly->introduce();

$obj_machine = new FlyingCar();
echo $obj_machine->introduce();
echo $obj_machine->bird_introduce();

?>