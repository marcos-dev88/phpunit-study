<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

/** @var AppFactory $app */
$app->get('/test', function(Request $request, Response $response) {
    $response->getBody()->write("Hello World! from slim");
    return $response;
});

