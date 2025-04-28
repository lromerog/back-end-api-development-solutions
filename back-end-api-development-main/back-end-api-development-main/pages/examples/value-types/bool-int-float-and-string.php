<?php

	$hasBeenSent = true;
	$hasBeenReceived = false;
	$isInTransit = 1;
	$isBeingPackaged = 0;

	$yourGrade = 20; // Int
	$myGrade = 19.5; // Float

	$myCar = "Pole star";
	$yourCar = 'Tesla';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/css/global.css">
	<link rel="stylesheet" type="text/css" href="/css/directory.css">
	<link rel="stylesheet" type="text/css" href="/css/facade.css">
</head>

<body>

	<h1>Value types: bool, int, float and string</h1>

	<h2>Book</h2>

	<p>Has been sent: <?= $hasBeenSent ?></p>
	<p>Has been received: <?= $hasBeenReceived ?></p>
	<p>Is in transit: <?= $isInTransit ?></p>
	<p>Is beign packaged: <?= $isBeingPackaged ?></p>

	<h2>Integers</h2>

	<p><?= $yourGrade ?></p>

	<h2>Floats</h2>
	
	<p><?= $myGrade ?></p>
	
	<h2>Strings</h2>
	
	<p><?= $myCar ?></p>
	<p><?= $yourCar ?></p>

</body>
</html>