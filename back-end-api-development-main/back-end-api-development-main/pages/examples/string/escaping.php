<?php

	$quote1 = '"I had a dream"';
	$quote2 = "\"And this is a string with escaped double quotes.\"";

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

		<h1>String escaping special characters</h1>

		<p>Using single quotes when string contains double quotes: <?= $quote1 ?></p>
		<p>Escaping special characters: <?= $quote2 ?></p>

	</body>
</html>