<?php
// Exercise: Superglobals - POST
// This script demonstrates how to use $_POST in PHP

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    echo "Hello, $name!";
} else {
    ?>
    <form method="post">
        <label for="name">Enter your name:</label>
        <input type="text" name="name" id="name">
        <button type="submit">Submit</button>
    </form>
    <?php
}
?> 