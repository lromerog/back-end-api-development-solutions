<?php

	$originalNumber1 = 5;
	$originalNumber2 = 10;
	$originalNumber3 = 2;

	/*  Reset numbers to original value */
	$number1 = $originalNumber1;
	$number2 = $originalNumber2;
	$number3 = $originalNumber3;
	
	$add 		= 	$number1 + $number2;
	
	$subtract 	= 	$number1 - $number2;
	
	$multiply 	= 	$number1 * $number2;
	
	$divide 	= 	$number1 / $number2;

	$modulo		=	$number2 % $number3;

	/*  Reset numbers to original values */
	$number1 = $originalNumber1;
	$number2 = $originalNumber2;
	$number3 = $originalNumber3;

	/*
		Difference between post & pre
		ie. $number = 5
			$incrementedNumber = ++$i
			-> adds to to $i and returns $i + 1
			(fastest option in PHP)	

		bv. $number = 5
			$incrementedNumber = $i++
			-> returns $i and then adds one to $i
	*/

	$preIncrement 	= 	++$number3;

	$number3 		= 	$originalNumber3;	// reset getal om increments aan te tonen
	$postIncrement 	= 	$number3++;

	$number3 		= 	$originalNumber3;	// reset getal om increments aan te tonen
	$preDecrement 	= 	--$number3;
	
	$number3 		= 	$originalNumber3;	// reset getal om increments aan te tonen
	$postDecrement 	= 	$number3--;
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

	<h1>Operators: arithmetic</h1>
			
		<section class="unit">
			<p>number 1: <?= $originalNumber1 ?></p>
			<p>number 2: <?= $originalNumber2 ?></p>
			<p>number 3: <?= $originalNumber3 ?></p>
		</section>

		<p>addition (number 1 + number 2): <?= $add ?></p>
		<p>subtraction (number 1 - number 2): <?= $subtract ?></p>
		<p>multiplication (number 1 * number 2): <?= $multiply ?></p> 
		<p>division (number 1 / number 2): <?= $divide ?></p>
		<p>modulo (number 2 % number 3): <?= $modulo ?></p>

		<p>pre increment of number 1 (number 3): <?= $preIncrement ?></p>
		<p>post increment of number 1 (number 3): <?= $postIncrement ?></p>

		<p>pre decrement of number 1 (number 3): <?= $preDecrement ?></p>
		<p>post decrement of number 1 (number 3): <?= $postDecrement ?></p>

</body>
</html>