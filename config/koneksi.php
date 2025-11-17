<?php

$servername = "localhost";
$database = "uinsi32";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
  
if (!$conn) {
 
    die("Connection failed: " . mysqli_connect_error());
 
}

?>