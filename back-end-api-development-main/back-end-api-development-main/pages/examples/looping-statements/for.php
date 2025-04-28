<?php

	$cars = array( 
		'Volvo', 
		'Porsche', 
		'Honda', 
		'Pagani', 
		'Peugot', 
		'Nissan', 
		'Volkswagen' 
	);
	
	$amountOfCars = count( $cars );

	/*
	for($carKey = 0; $carKey < $amountOfCars; ++$carKey ) 
	{
		echo $cars[$carKey] . '<br>';
	}
	*/
	
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

		<h1>Looping statements: for</h1>

		<ul>
			<?php for( $carKey = 0; $carKey < $amountOfCars; ++$carKey ): ?>
				<li><?= $cars[$carKey] ?></li>
			<?php endfor ?>
		</ul>
	</body>
</html>