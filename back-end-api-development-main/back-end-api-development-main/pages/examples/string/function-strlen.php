<?php
	
	$text = 'Computer, how many characters do I contain?';
	$textLength	=	strlen( $text );

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

	<h1>String function: strlen()</h1>
	
	<style>
		.computer
		{
			font-style:italic;
			font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
		}
	
	</style>

	<p><?= $text ?></p> 
	<p class="computer">-Bzz, bzz, amount of characters, bzz: <?= $textLength ?>!</p>


</body>
</html>