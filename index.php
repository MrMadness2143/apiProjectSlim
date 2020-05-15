<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Exception\NotFoundException;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();
$app->setBasePath("/apiProjectAs"); //sets project folder as base

$app->get('/elogs/date/{name}', function (Request $request, Response $response, $args) {
    extract($args);
    //$args['name'];
    $response->getBody()->write("Hello,$name  no ");
    return $response;
});

$app->get('/elogs/{errID}.{name2}', function (Request $request, Response $response, $args) {
    extract($args);
    $errID = $args['errID'];
    $name2 = $args['name2'];
    $response->getBody()->write("Hello, $errID say hello to $name2");
    return $response;
});

$app->run();