<?php
// Exercise: Arrays - Creation
// This script demonstrates how to create arrays in PHP

// Indexed array
$fruits = array("Apple", "Banana", "Cherry");

// Associative array
$person = array(
    "name" => "John",
    "age" => 25,
    "city" => "New York"
);

// Multidimensional array
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

// Output results

echo "Indexed array: ";
print_r($fruits);
echo "<br>Associative array: ";
print_r($person);
echo "<br>Multidimensional array: ";
print_r($matrix);
?> 