<?php

	$fruit 		= 	array( 
		'lemon', 
		'banana', 
		null 
	);

	$issetTest01	=	isset( $fruit[ 0 ] );
	$issetTest02	=	isset( $fruit[ 2 ] );

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
	
	<h1>Array function: isset()</h1>

	<p>Value for <code>isset( $fruit[0] )</code>: <?= $issetTest01 ?></p> 
	<p>Value for <code>isset( $fruit[2] )</code>: <?= $issetTest02 ?></p> 

</body>
</html>