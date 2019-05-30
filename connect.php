<?php

$servername = "localhost";
$username = "s6014421008";
$password = "webit60";
$db_name = "s6014421008";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    $count = 1;
}

?> 