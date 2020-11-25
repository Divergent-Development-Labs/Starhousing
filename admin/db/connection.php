<?php

//Local

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "star_db";

//Production Old

// $servername = "localhost";
// $username = "eakmartc_star";
// $password = "@Starhousing2020";
// $dbname = "eakmartc_star_db";

//Production New

// $servername = "localhost";
// $username = "starhous_org";
// $password = "Star_Plot2";
// $dbname = "starhous_bala";

// Create connection
$conn =mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection  failed: " . $conn->connect_error);
}

ini_set('precision', 10);
ini_set('serialize_precision', 10);

?>