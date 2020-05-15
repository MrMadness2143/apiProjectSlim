<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Exception\NotFoundException;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();
$app->setBasePath("/apiProjectAs"); //sets project folder as base

$app->get('/elogs', function (Request $request, Response $response) {
    $response->getBody()->write("Insert error log code here");
    return $response;
});

$app->get('/elogs/test/{errID}.{name2}', function (Request $request, Response $response, $args) {
    $errID = $args['errID'];
    $name2 = $args['name2'];
    $response->getBody()->write("Hello, $errID say hello to $name2");
    return $response;
});

$app->get('/elogs/date/{date}', function (Request $request, Response $response, $args) {

});

$app->get('/elogs/user/{userID}', function (Request $request, Response $response, $args) {

});

$app->get('/elogs/geocode/{latitude}/{longitude}', function (Request $request, Response $response, $args) {

});

$app->get('/history', function (Request $request, Response $response) {

});

$app->get('/history/route/{routeID}', function (Request $request, Response $response, $args) {

});

$app->get('/history/date/{date}', function (Request $request, Response $response, $args) {

});

$app->get('/history/geocode/{latitude}/{longitude}', function (Request $request, Response $response, $args) {

});

$app->get('/route/{latitudeA}/{longitudeA}/{latitudeB}/{longitudeB}/{wException}', function (Request $request, Response $response, $args) {

});

$app->get('/stats}', function (Request $request, Response $response, $args) {

});

$app->get('/stats/user}', function (Request $request, Response $response, $args) {

});

$app->get('/stats/user/daily/{date}', function (Request $request, Response $response, $args) {

});

$app->get('/stats/user/weekly/{date}', function (Request $request, Response $response, $args) {

});

$app->get('/stats/user/monthly/{date}', function (Request $request, Response $response, $args) {

});

$app->get('/stats/error', function (Request $request, Response $response, $args) {

});

$app->get('/stats/error/daily/{date}', function (Request $request, Response $response, $args) {

});

$app->get('/stats/error/weekly/{date}', function (Request $request, Response $response, $args) {

});

$app->get('/stats/error/monthly/{date}', function (Request $request, Response $response, $args) {

});

$app->get('/stats/error/tRoute', function (Request $request, Response $response, $args) {

});

$app->get('/stats/error/tFault', function (Request $request, Response $response, $args) {

});

$app->get('/stats/error/average', function (Request $request, Response $response, $args) {

});

$app->get('/stats/route', function (Request $request, Response $response, $args) {

});

$app->get('/stats/route/daily/{date}', function (Request $request, Response $response, $args) {

});

$app->get('/stats/route/weekly/{date}', function (Request $request, Response $response, $args) {

});

$app->get('/stats/route/monthly/{date}', function (Request $request, Response $response, $args) {

});
$app->run();