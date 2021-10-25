<?php

interface LoggerInterface{

    public function log(string $level , string $message);
    public function log_info(string $level ,string $message);
    public function error_log(string$level ,string $message);
    public function success_log(string $level ,string $message);
    public function warning_log(string $level ,string $message);

}

?>