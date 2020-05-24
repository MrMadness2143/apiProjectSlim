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

$app->get('/route/{latitudeA}&{longitudeA}/{latitudeB}&{longitudeB}/{wException}', function (Request $request, Response $response, $args) {
extract($args);
echo "$latitudeA, $longitudeA\n\n";
echo " $latitudeB, $longitudeB\n\n";
echo " $wException\n\n";
return $response;
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

$app->get('/stats/date/{date}', function (Request $request, Response $response, $args) {
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

$app->get('/geotest/{location}', function (Request $request, Response $response, $args) {
    extract($args);
    echo geocode($location);
    return $response;
});

$app->get('/routetest/{locationA}&{locationB}', function (Request $request, Response $response, $args) {
    extract($args);
    $geoLocA=geocode($locationA);
    $geoLocB=geocode($locationB);
    //echo "$geoLocA and $geoLocB";
    //echo "<br>";
    $routeLocations = createRoute($geoLocA,$geoLocB,'2019-10-02T17:00:00');

    echo $routeLocations;
    return $response;
});

$app->run();


function geocode($location){
    $apiKey = "nZnDXQlqhjVgX98BbCzmbgQYLilxxacjmwBsbf-0sNI";
    $location = str_replace(' ', '',$location); //renives spaces from location string
    $url = "https://geocode.search.hereapi.com/v1/geocode?q=$location&apiKey=$apiKey";  //sets url for search
    $useragent = 'php';
    $ch = curl_init();  //starts curl session
    curl_setopt($ch, CURLOPT_URL, $url);            //sets parameters for the curl operation
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
    $result=curl_exec($ch);     // executes curl and stores result
    curl_close($ch);    //closes curl session

    $posstart = strpos($result, 'position')+12; //finds character start position for "position"
    $posend = strpos($result, 'access');   //finds character start position for "access"

    if (strpos($result, 'access') != false){    //checks whether access variable exists
        $reslong = strlen($result); //finds the length of result
        $result = substr($result,$posstart,$posend-$reslong-3); //removes a length of characters around lat long values
    }else{
        $result = substr($result, $posstart);  //removes all values before lat
    }

    //  checks result for leftover values and removes them
    if (strpos($result, 'mapView') !=false){
        $posstart= 0;   //resets start value
        $posend = strpos($result, 'mapView');   //finds character start position for "access"
        $reslong = strlen($result);         //measures the strings lenth
        $reslong=$reslong+3;    //adjusts for syntax
        $result = substr($result,$posstart,$posend-$reslong); //isolates values for latitude longitude
    }
    $result = str_replace('"',"",$result);  //removes certain characters and names
    $result = str_replace("lat:","",$result);
    $result = str_replace("lng:","",$result);
    return $result;         // returns result
}
function createRoute($origin,$dest,$deparTime){
    $transport = "car";
    $apiKey = "nZnDXQlqhjVgX98BbCzmbgQYLilxxacjmwBsbf-0sNI";
    $return="polyline";
    $avoid="";
    $departbackup = "2019-10-02T17:00:00";
    $useragent = 'php';

    $url = "https://router.hereapi.com/v8/routes?transportMode=$transport&origin=$origin&destination=$dest&return=$return&departureTime=$deparTime&apiKey=$apiKey&avoid";
    $ch = curl_init();  //starts curl session
    curl_setopt($ch, CURLOPT_URL, $url);            //sets parameters for the curl operation
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
    $result=curl_exec($ch);     // executes curl and stores result
    curl_close($ch);    //closes curl session

    
    //$resArray = explode('":', $result);   //turns into array spliting at value
    //var_dump($resArray);
    //$value = $result->routes->sections->departure->location->lat;//51.5815069
    



    return $result;

}
?>



<!doctype html>
<html>

    <?php include('template/header.php'); ?>


    <?php include('template/footer.php'); ?>

</html>