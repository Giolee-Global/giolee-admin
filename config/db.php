<?php
// set a default environment
$WEBSITE_ENVIRONMENT = "Development";
// detect the URL to determine if it's development or production
if (stristr($_SERVER['HTTP_HOST'], 'localhost') === FALSE) $WEBSITE_ENVIRONMENT = "Production";
// value of variables will change depending on if Development vs Production
if ($WEBSITE_ENVIRONMENT == "Development") {
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "giolee";
    error_reporting(E_ALL ^ E_NOTICE); // turn ON showing errors
} else {
    $host = "localhost";
    $user = "gioleeco_app";
    $password = "*6a~xCSxumBL";
    $database = "gioleeco_app";
    define("APP_ENVIRONMENT", "Production");
    define("APP_BASE_URL", "https://www.backoffice.giolee.com");
    #error_reporting(0); // turn OFF showing errors
    error_reporting(E_ALL ^ E_NOTICE); // turn ON showing errors
}
// connect to the database server
$conn = mysqli_connect($host, $user, $password) or die("Could not connect to database");
// select the right database
mysqli_select_db($conn, $database);
// END Database connection and Configuration