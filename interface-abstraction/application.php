<?php 

require_once 'LogInterface.php';

class Application{
    public $logger;
    public function __construct(LoggerInterface $ref){
        $this->logger = $ref;
    }
}


?>