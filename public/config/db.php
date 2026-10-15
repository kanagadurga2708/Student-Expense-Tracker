<?php

$host = "db01.dbhost.dev";
$user = "user_454kber4b";
$password = "p454kber4b";
$database = "db_454kber4b";
$port = 5051;

$conn = new mysqli($host, $user, $password, $database,$port);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

?>