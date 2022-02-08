<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$database = "property";

$conn = new mysqli(
    $servername,
    $username,
    $password,
    $database
);

// Check connection
if ($conn->connect_error) {
    die("Connection failure: "
        . $conn->connect_error);
}
