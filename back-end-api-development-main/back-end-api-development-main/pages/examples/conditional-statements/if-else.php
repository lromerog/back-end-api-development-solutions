<?php

	$option = "pizza";
	
	if ( $option == "pizza" ) 
	{
		$reply = "Nice! I love pizza.";
	} 
	else 
	{
		$reply = "Damn, no pizza? I want pizza!";
	}

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
	
	<h1>Conditional statements: if else</h1>

	<p>Serving today: <?= $option ?></p>
	<p>- <?= $reply ?></p>
	
</body>
</html>