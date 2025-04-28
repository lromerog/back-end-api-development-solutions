<?php
// Exercise: Arrays - Functions
// This script demonstrates basic array functions in PHP

$numbers = array(4, 2, 8, 6);

// Count elements
$count = count($numbers);
// Sort array
sort($numbers);
// Reverse array
$reversed = array_reverse($numbers);
// Search for a value
$found = in_array(8, $numbers);

// Output results

echo "Original array: [4, 2, 8, 6]<br>";
echo "Count: $count<br>";
echo "Sorted array: "; print_r($numbers); echo "<br>";
echo "Reversed array: "; print_r($reversed); echo "<br>";
echo "Is 8 in the array? "; echo $found ? 'Yes' : 'No';
echo "<br>";
?> 