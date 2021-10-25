<?php 

require_once 'application.php';
require_once 'DbLogSystem.php';
require_once 'FileLogSystem.php';

$app = new Application(
    // new DbLog()
    new FileLog()
);

echo $app->logger->error_log("Error",'Error Log');
echo $app->logger->success_log("Success",'Error Log');
echo $app->logger->warning_log("Warning",'Error Log');
echo $app->logger->log_info("Info",'Error Log');
echo $app->logger->log("Debugger",'Error Log');

?> 