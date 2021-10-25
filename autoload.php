<?php 

spl_autoload_register(function($className){
    include  dirname(__FILE__).'/'.str_replace("\\", '/', $className).'.php';
    echo $className;
});


$obj = new \rb1\user\Test2();

?>