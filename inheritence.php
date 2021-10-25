<?php 

class Person{

    public $name;
    public $state;
    protected $address;
    protected $email;
    private $adharNumber ;

    public function __construct($name , $state  , $email , $adharNumber){
        $this->name = $name;
        $this->state = $state;
        $this->email = $email;
        $this->adharNumber = $adharNumber;
    }
    
    public function person_info() : string{
        return "Hello , I am \"$this->name\" . I am from \"$this->state\" State ".PHP_EOL;
    }

    final protected function reveal_adhar(){  // final stop inheritance process further
        return $this->adharNumber;
    }


}

final class Employee extends Person{
    protected $empId;
    public $age;
    public $company;
    private $salary;
    protected $designation;

    public function __construct($name , $state  , $email , $adharNumber , $empId ,$age , $company , $salary , $designation){
        parent::__construct($name , $state  , $email , $adharNumber);
        $this->empId = $empId;
        $this->age = $age;
        $this->company = $company;
        $this->salary = $salary;
        $this->designation = $designation;
        $this->salary_account();    
    }

    public function person_info() : string{ 
        return "Hello , I am \"$this->name\" . I am from \"$this->state\" 
        and working in \"$this->company\" On \"$this->designation\" Role ".PHP_EOL;
    }

    private function salary_account(){
        echo "Salary Account For Employee \"$this->empId\" With \"" . parent::reveal_adhar() . "\" Aadhar Number Created Successfully".PHP_EOL;
    }
}



$ObjPerson = new Employee("Rakesh","Bengal","rakesh@gmail.com","236923103170","MM0579",23,"Maventic Pvt Ltd",26000,"Developer");
echo $ObjPerson->person_info();



?>