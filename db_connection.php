<?php
// Exercise: Databases - Connection
// This script demonstrates how to connect to a MySQL database using mysqli

$host = "localhost";
$user = "root";
$password = "";
$database = "test"; // Make sure this database exists in phpMyAdmin

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";
$conn->close();
?> 