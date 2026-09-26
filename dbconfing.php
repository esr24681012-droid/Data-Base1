<?php

$hostname = "localhost";
$username = "root";
$pas = "";
$dbname = "users";


$conn = new mysqli($hostname, $username, $pas, $dbname);

if ($conn->connect_error) {     //-> ذي ال .

    die("error connection is" . $conn->connect_error);
}





?>