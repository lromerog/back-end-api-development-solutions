<?php
// Exercise: Databases - Update
// This script demonstrates how to update data in a MySQL database

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
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $conn->real_escape_string($_POST['name']);
        $sql = "UPDATE users SET name='$name' WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully!";
        } else {
            echo "Error: " . $conn->error;
        }
    }
    // Fetch current name
    $result = $conn->query("SELECT name FROM users WHERE id=$id");
    $row = $result->fetch_assoc();
    ?>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($row['name']); ?>">
        <button type="submit">Update</button>
    </form>
    <?php
} else {
    // Show all users
    $result = $conn->query("SELECT id, name FROM users");
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . " - Name: " . $row["name"];
            echo " <a href='?id=" . $row["id"] . "'>Edit</a><br>";
        }
    } else {
        echo "No users found.";
    }
}
$conn->close();
?> 