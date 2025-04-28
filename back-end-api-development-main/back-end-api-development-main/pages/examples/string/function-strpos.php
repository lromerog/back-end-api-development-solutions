<?php

	$haystack 		= 	'Searching for a needle in a haystack.';
	$needle 		= 	'S';
	
	$needlePosition	= 	strpos( $haystack, $needle );
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

	<h1>String function: strpos()</h1>

	<ul>
	    <li>haystack: <?php echo $haystack ?></li>
	    <li>needle: <?php echo $needle ?></li>
	    <li>needle position: <?php echo $needlePosition ?></li>
	</ul>

</body>
</html>