<?php
// Exercise: String functions
// This script demonstrates basic string functions in PHP

$original = "Hello, World!";
$length = strlen($original);
$upper = strtoupper($original);
$lower = strtolower($original);
$replaced = str_replace("World", "PHP", $original);

// Output results

echo "Original string: $original<br>";
echo "Length: $length<br>";
echo "Uppercase: $upper<br>";
echo "Lowercase: $lower<br>";
echo "Replaced: $replaced<br>";
?> 