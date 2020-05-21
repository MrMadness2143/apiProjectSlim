<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Exception\NotFoundException;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();
$app->setBasePath("/apiProjectAs"); //sets project folder as base

$app->get('/', function(Request $request, Response $response){
echo "root";
return $response;

});

$app->get('/elogs', function (Request $request, Response $response) {
    $conn = mysqli_connect("localhost", "root", "", "apiproject");    // Create connection

    $sql = 'SELECT * FROM elogs';   //query for all elogs
    $result = mysqli_query($conn, $sql);  //makes query and stores result
    $elog = mysqli_fetch_all($result, MYSQLI_ASSOC);   //fetch results  as an array
    mysqli_free_result($result);    //frees result
    mysqli_close($conn);            //closes database connection
    $elog=json_encode($elog);     //encodes data into json
    echo($elog);                //prints data
    return $response;
});

$app->get('/elogs/id/{errID}', function (Request $request, Response $response, $args) {
    $conn = mysqli_connect("localhost", "root", "", "apiproject");  // Create connection

    extract($args);     //extracts data from url
    $sql = "SELECT * FROM elogs where errID = '$errID'";  //query for stat log from the date
    $result = mysqli_query($conn, $sql);  //makes query and stores result
    $elog = mysqli_fetch_all($result, MYSQLI_ASSOC);   //fetch results  as an array
    mysqli_free_result($result);    //frees result
    mysqli_close($conn);            //closes database connection
    $elog=json_encode($elog);     //encodes data into json
    echo($elog);                //prints data
    return $response;
});

$app->get('/elogs/date/{date}', function (Request $request, Response $response, $args) {
    $conn = mysqli_connect("localhost", "root", "", "apiproject");  // Create connection

    extract($args);     //extracts data from url
    $sql = "SELECT * FROM elogs where eLogDate = '$date'";  //query for stat log from the date
    $result = mysqli_query($conn, $sql);  //makes query and stores result
    $elog = mysqli_fetch_all($result, MYSQLI_ASSOC);   //fetch results  as an array
    mysqli_free_result($result);    //frees result
    mysqli_close($conn);            //closes database connection
    $elog=json_encode($elog);     //encodes data into json
    echo($elog);                //prints data
    return $response;
});

$app->get('/elogs/week/{date}', function (Request $request, Response $response, $args) {
    $conn = mysqli_connect("localhost", "root", "", "apiproject");  // Create connection

    extract($args);     //extracts data from url
    $sql = "SELECT * FROM elogs where eLogDate = '$date'";  //query for stat log from the date
    $result = mysqli_query($conn, $sql);  //makes query and stores result
    $elog = mysqli_fetch_all($result, MYSQLI_ASSOC);   //fetch results  as an array
    mysqli_free_result($result);    //frees result
    mysqli_close($conn);            //closes database connection
    $elog=json_encode($elog);     //encodes data into json
    echo($elog);                //prints data
    return $response;
});

$app->get('/elogs/month/{date}', function (Request $request, Response $response, $args) {
    $conn = mysqli_connect("localhost", "root", "", "apiproject");  // Create connection

    extract($args);     //extracts data from url
    $sql = "SELECT * FROM elogs where eLogDate = '$date'";  //query for stat log from the date
    $result = mysqli_query($conn, $sql);  //makes query and stores result
    $elog = mysqli_fetch_all($result, MYSQLI_ASSOC);   //fetch results  as an array
    mysqli_free_result($result);    //frees result
    mysqli_close($conn);            //closes database connection
    $elog=json_encode($elog);     //encodes data into json
    echo($elog);                //prints data
    return $response;
});

$app->get('/elogs/user/{userID}', function (Request $request, Response $response, $args) {
    echo "hello world";
});

$app->get('/elogs/geocode/{latitude}/{longitude}', function (Request $request, Response $response, $args) {

});

$app->get('/history', function (Request $request, Response $response) {
    $conn = mysqli_connect("localhost", "root", "", "apiproject");    // Create connection

    $sql = 'SELECT * FROM history';   //query for all histories
    $result = mysqli_query($conn, $sql);  //makes query and stores result
    $history = mysqli_fetch_all($result, MYSQLI_ASSOC);   //fetch results  as an array
    mysqli_free_result($result);    //frees result
    mysqli_close($conn);            //closes database connection
    $history=json_encode($history);     //encodes data into json
    echo($history);                //prints data
    return $response;
});

$app->get('/history/route/{routeID}', function (Request $request, Response $response, $args) {
    $conn = mysqli_connect("localhost", "root", "", "apiproject");    // Create connection

    extract($args);     //extracts data from url
    $sql = "SELECT * FROM history WHERE routeID = '$routeID'";   //query for a history
    $result = mysqli_query($conn, $sql);  //makes query and stores result
    $history = mysqli_fetch_all($result, MYSQLI_ASSOC);   //fetch results  as an array
    mysqli_free_result($result);    //frees result
    mysqli_close($conn);            //closes database connection
    $history=json_encode($history);     //encodes data into json
    echo($history);                //prints data
    return $response;
});

$app->get('/history/day/{date}', function (Request $request, Response $response, $args) {
    $conn = mysqli_connect("localhost", "root", "", "apiproject");    // Create connection

    extract($args);     //extracts data from url
    $sql = "SELECT * FROM history WHERE routeDate = '$date'";   //query for histories on a day
    $result = mysqli_query($conn, $sql);  //makes query and stores result
    $history = mysqli_fetch_all($result, MYSQLI_ASSOC);   //fetch results  as an array
    mysqli_free_result($result);    //frees result
    mysqli_close($conn);            //closes database connection
    $history=json_encode($history);     //encodes data into json
    echo($history);                //prints data
    return $response;
});

$app->get('/history/week/{date}', function (Request $request, Response $response, $args) {

});

$app->get('/history/month/{date}', function (Request $request, Response $response, $args) {

});

$app->get('/history/geocode/{latitude}/{longitude}', function (Request $request, Response $response, $args) {

});

$app->get('/route/{latitudeA}/{longitudeA}/{latitudeB}/{longitudeB}/{wException}', function (Request $request, Response $response, $args) {

});

$app->get('/stats', function (Request $request, Response $response) {
    $conn = mysqli_connect("localhost", "root", "", "apiproject");    // Create connection

    $sql = 'SELECT * FROM stats';   //query for all stats
    $result = mysqli_query($conn, $sql);  //makes query and stores result
    $stats = mysqli_fetch_all($result, MYSQLI_ASSOC);   //fetch results  as an array
    mysqli_free_result($result);    //frees result
    mysqli_close($conn);            //closes database connection
    $stats=json_encode($stats);     //encodes data into json
    echo($stats);                //prints data
    return $response;
});

$app->get('/stats/user', function (Request $request, Response $response, $args) {
    $conn = mysqli_connect("localhost", "root", "", "apiproject");    // Create connection

    $sql = 'SELECT * FROM stats where statGroup = "user"';  //query for user stats
    $result = mysqli_query($conn, $sql);  //makes query and stores result
    $stats = mysqli_fetch_all($result, MYSQLI_ASSOC);   //fetch results  as an array
    mysqli_free_result($result);    //frees result
    mysqli_close($conn);            //closes database connection
    $stats=json_encode($stats);     //encodes data into json
    echo($stats);                //prints data
    return $response;
});

$app->get('/stats/error', function (Request $request, Response $response, $args) {
    $conn = mysqli_connect("localhost", "root", "", "apiproject");    // Create connection

    $sql = 'SELECT * FROM stats where statGroup = "error"';  //query for user stats
    $result = mysqli_query($conn, $sql);  //makes query and stores result
    $stats = mysqli_fetch_all($result, MYSQLI_ASSOC);   //fetch results  as an array
    mysqli_free_result($result);    //frees result
    mysqli_close($conn);            //closes database connection
    $stats=json_encode($stats);     //encodes data into json
    echo($stats);                //prints data
    return $response;
});

$app->get('/stats/route', function (Request $request, Response $response, $args) {
    $conn = mysqli_connect("localhost", "root", "", "apiproject");  // Create connection

    $sql = 'SELECT * FROM stats where statGroup = "route"';  //query for user stats
    $result = mysqli_query($conn, $sql);  //makes query and stores result
    $stats = mysqli_fetch_all($result, MYSQLI_ASSOC);   //fetch results  as an array
    mysqli_free_result($result);    //frees result
    mysqli_close($conn);            //closes database connection
    $stats=json_encode($stats);     //encodes data into json
    echo($stats);                //prints data
    return $response;
});

$app->get('/stats/route/date/{date}', function (Request $request, Response $response, $args) {
    $conn = mysqli_connect("localhost", "root", "", "apiproject");  // Create connection
    extract($args);     //extracts data from url
    $sql = "SELECT * FROM statlogs where sLogDate = '$date'";  //query for stat log from the date
    $result = mysqli_query($conn, $sql);  //makes query and stores result
    $stats = mysqli_fetch_all($result, MYSQLI_ASSOC);   //fetch results  as an array
    mysqli_free_result($result);    //frees result
    mysqli_close($conn);            //closes database connection
    $stats=json_encode($stats);     //encodes data into json
    echo($stats);                //prints data
    return $response;
});

$app->run();
?>



<!doctype html>
<html>

    <?php include('template/header.php'); ?>


    <?php include('template/footer.php'); ?>

</html>