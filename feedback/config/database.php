<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'Clement');
define('DB_PASS', 'Niiok11*');
define('DB_NAME', 'php_dev');
define('DB_PORT', '3307');

//Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);


// Check connection
if($conn->connect_error) {
    die('Connection Failed' . $conn->connect_error);
}



