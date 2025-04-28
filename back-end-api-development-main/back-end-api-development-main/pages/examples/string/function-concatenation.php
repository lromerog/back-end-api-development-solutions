<?php

	$text1 = 'This is a string with single quotes.';
	$text2 = "And this is a string with double quotes.";

	$fullText = $text1 . $text2;
	$fullTextWithSpace = $text1 . ' ' . $text2;

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

		<h1>String function: concatenation</h1>

		<p><?= $text1 ?></p>
		<p><?= $text2 ?></p>

		<h2>Concatenated text</h2>
		
		<p>Concatenated by PHP <?= $fullText ?></p>

		<p>Notice that there is no space between the concatenated texts</p>

		<h2>Concatenate string and separate with a space</h2>

		<p>Space added in the variable: <?= $fullTextWithSpace ?></p>
		<p>Space added in the HTML: <?= $text1 ?> <?= $text2 ?></p>
		<p>Space added in the inline syntax (to be avoided): <?= $text1 . ' ' . $text2 ?></p>

	</body>
</html>