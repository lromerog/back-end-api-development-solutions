<?php

	$glass = "empty";

	if ( $glass == "empty" ) 
	{
		$status = "thirsty";
	}
	
	if ( $glass == "half full" ) 
	{
		$status = "optimistic";
	}	

	if ( $glass == "half empty" ) 
	{
		$status = "pessimistic";
	}
	
	if ( $glass == "full" ) 
	{
		$status = "not thirsty";
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

	<style>
		.empty-color
		{
			padding:4px;
			color: #b94a48;
			background-color: #f2dede;
			border:1px solid #ebccd1;
			border-radius:2px;
		}
	</style>

	<h1>Conditional statements: if & shorthand if</h1>

	<p class="<?= ( ( $glass == "empty" ) ? "empty-color" : "" ) ?>">Jeff's glass is <?= $glass ?>, he's <?= $status ?>.</p>

</body>
</html>