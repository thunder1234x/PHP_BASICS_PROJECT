<?php 
require_once 'LogInterface.php' ;

abstract class LogUserData implements LoggerInterface{
    public function log_info(string $level ,string $message){
        return  $this->log($level ,$message);
    }
    public function error_log(string $level ,string $message){
       return  $this->log($level ,$message);
    }
    public function success_log(string $level ,string $message){
        return  $this->log($level ,$message);
    }
    public function warning_log(string $level ,string $message){
        return  $this->log($level ,$message);
    }
}

?>