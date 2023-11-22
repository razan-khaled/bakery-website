<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "bakery_final_project";

function openConnection() {
    global $host, $user, $password, $db;
    $conn = new mysqli($host, $user, $password, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function closeConnection($conn) {
    $conn->close();
}
?>