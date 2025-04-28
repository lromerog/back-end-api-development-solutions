<?php
// Exercise: Logic operators
// This script demonstrates basic logic operators in PHP

$a = true;
$b = false;

// Logical AND
$and = $a && $b;
// Logical OR
$or = $a || $b;
// Logical NOT
$notA = !$a;
// Logical XOR
$xor = $a xor $b;

// Output results

echo "a = "; var_export($a); echo "<br>";
echo "b = "; var_export($b); echo "<br>";
echo "a AND b = "; var_export($and); echo "<br>";
echo "a OR b = "; var_export($or); echo "<br>";
echo "NOT a = "; var_export($notA); echo "<br>";
echo "a XOR b = "; var_export($xor); echo "<br>";
?> 