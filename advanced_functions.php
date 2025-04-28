<?php
// Exercise: Advanced functions
// This script demonstrates advanced function features in PHP

function sum(...$numbers) {
    return array_sum($numbers);
}

function apply($callback, $value) {
    return $callback($value);
}

echo "Sum: " . sum(1, 2, 3, 4) . "<br>";
echo "Uppercase: " . apply('strtoupper', 'hello') . "<br>";
?> 