<?php

		$carsNumerical 		= 	array( 
			'Volvo', 
			'Porsche', 
			'Honda'
		);

		$carsAssociative 	= 	array( 
			'Volvo' 	=> 	'145hp', 
			'Honda' => 	'160hp'
		);

		var_dump($carsAssociative);

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
	
	<h1>Arrays: assignment</h1>

		<p>dump of numerical array: <pre><?php var_dump( $carsNumerical ) ?></pre></p>
		<p>dump of associative array: <pre><?php var_dump( $carsAssociative ) ?></pre></p>

		<p>Value from numerical array at key location <code>1</code>: <?= $carsNumerical[1] ?></p>
		<p>Value from associative array at key location <code>1</code>: <?= $carsAssociative[1] ?> ("Undefined array key" because the key doesn't exist)</p>
		<p>Value from associative array at key location <code>Honda</code>: <?= $carsAssociative['Honda'] ?></p>

</body>
</html>