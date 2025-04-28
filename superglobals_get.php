<?php
// Exercise: Superglobals - GET
// This script demonstrates how to use $_GET in PHP

if (isset($_GET['name'])) {
    $name = htmlspecialchars($_GET['name']);
    echo "Hello, $name!";
} else {
    echo "Please provide your name in the URL, e.g., ?name=Alice";
}
?> 