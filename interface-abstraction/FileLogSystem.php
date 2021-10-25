<?php 
require_once 'abstractLoggerClass.php';
class FileLog extends LogUserData{

    public function log($level , $message){
        return "CALLING LOG METHOD OF LEVEL \"$level\" FROM " .__METHOD__ . PHP_EOL;
    }

}


?>