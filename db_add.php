<?php
// Exercise: Databases - Add
// This script demonstrates how to add data to a MySQL database

$host = "localhost";
$user = "root";
$password = "";
$database = "test";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $sql = "INSERT INTO users (name) VALUES ('$name')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<form method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <button type="submit">Add User</button>
</form> 