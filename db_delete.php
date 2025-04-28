<?php
// Exercise: Databases - Delete
// This script demonstrates how to delete data from a MySQL database

$host = "localhost";
$user = "root";
$password = "";
$database = "test";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $sql = "DELETE FROM users WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Show all users
$result = $conn->query("SELECT id, name FROM users");
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"];
        echo " <a href='?id=" . $row["id"] . "'>Delete</a><br>";
    }
} else {
    echo "No users found.";
}
$conn->close();
?> 