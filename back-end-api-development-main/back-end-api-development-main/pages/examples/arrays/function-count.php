<?php

	$cars = array( 
		'Volvo', 
		'Porsche', 
		'Honda' 
	);

	$cars[105] = 'Ford';

	$amountOfCars = count( $cars );
	
	if ( $amountOfCars > 0 ) 
	{
		$result = $amountOfCars . ' cars in the array!';
	}
	else 
	{
		$result = 'No values were found in the array containing cars';
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
	
	<h1>Array function: count()</h1>

	<?php var_dump( $cars ) ?></pre>

	<p><?= $result ?></p>
	<p><?= $amountOfCars ?></p>

</body>
</html>