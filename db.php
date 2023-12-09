<?php

$servername = "jashhh11.mysql.database.azure.com";
$username = "cse20139root";
$password = "Sai@11052004";
$db = "onlineshop";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
