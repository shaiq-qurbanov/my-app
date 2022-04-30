<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "darogi";

//create connection
$conn= new mysqli($servername, $username, $password, $dbname);
//check connection
// if ($conn->connect_error) {
//     die("connection filed:" .$conn->connect_error);
// }
//     echo "connected successfulli";
