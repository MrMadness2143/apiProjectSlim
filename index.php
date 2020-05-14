<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Exception\NotFoundException;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();
$app->setBasePath("/apiProjectAs"); //sets project folder as base

$app->get('/elogs/{name},{name2}', function (Request $request, Response $response, $args) {
    extract($args);
    // $name = $args['name'];
    // $name2 = $args['name2'];
    $response->getBody()->write("Hello, $name, $name2");
    return $response;
});

$app->run();