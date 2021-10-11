<?php

session_start();

require '../vendor/autoload.php';

use Slim\Factory\AppFactory;

$app = AppFactory::create();

$app->addRoutingMiddleware();
$app->addErrorMiddleware(true, true, true);
$app->setBasePath("/api/v1");

require("../api/v1/user_creator.php");

try {
    $app->run();
}catch (Exception $e){
    die(json_encode(
        [
            "status" => "failed",
            "message" => "This action is not allowed",
            "exception_message" => $e
        ]
    ));
}
