<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "apiproject";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = 'SELECT * FROM stats';   //query for all stats
$result = mysqli_query($conn, $sql);  //makes query and stores result
$stats = mysqli_fetch_all($result, MYSQLI_ASSOC);   //fetch results  as an array
mysqli_free_result($result);    //frees result
mysqli_close($conn);            //closes database connection
$stats=json_encode($stats);     //encodes data into json
echo($stats);                //prints readable data
?>