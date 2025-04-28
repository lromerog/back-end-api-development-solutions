<?php

	$arrayTest = array(0, 1, 'thisIsATest' => 'Yes!');

	var_dump($arrayTest); // Do not use this inside of your HTML. For debugging purposes only!

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

		<h1>Configuration: XDebug</h1>

		<p>This is an example page to test whether XDebug is running correctly. If everything is configured correctly, you should see a pretty print of the array, in stead of one single line with all the data stringed together.</p>

	</body>
</html>