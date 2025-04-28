<?php

	$welcome = 'Hello world from variable';

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

	<h1>PHP tag: inline syntax</h1>

	<h2>Print manually</h2>

	<p><?php echo "Hello World" ?></p>

	<h2>Shorthand for printing</h2>
	
	<p><?= "Shorthand for echo" ?></p>
	
	<h2>Printing variables from code block</h2>
	
	<p><?= $welcome ?></p>

</body>
</html>