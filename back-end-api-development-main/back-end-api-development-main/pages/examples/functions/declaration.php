<?php

	function sayHello() 
	{

		$string1 	=	'Hello!';
		$string2	=	'From a function without a return value';

		echo $string1 . ' ' . $string2;

	}

	function sayGoodbye() 
	{

		$string1 	=	'See you!';
		$string2	=	'From a function with a return value';

		return $string1 . ' ' . $string2;
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

		<h1>Functions: declaration</h1>

		<p><?php sayHello() ?></p>

		<p><?= sayGoodbye() ?></p>
	</body>
</html>