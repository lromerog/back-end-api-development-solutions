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
	
	/*
	foreach ($cars as $car) 
	{
		echo $car . '<br>';
	}
	*/

	$sodas = array(	
		'Cola' 	=> 'Light', 
		'Fanta' => 'Lemon', 
		'Dr Pepper' => 'Regular'
	);
	
	/*
	foreach ($sodas as $soda => $type) 
	{
		echo 'I would like to order a ' . $soda . ' ' . $type . ' please.' . '<br>';
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

		<h1>Looping statements: foreach</h1>

		<h2>Looping statements directly using value without key</h2>
		<ul>
			<?php foreach ($cars as $car): ?>
				<li><?= $car ?></li>
			<?php endforeach ?>
		</ul>

		<h2>Looping statements with key and value</h2>
		<ul>
			<?php foreach ($sodas as $soda => $type): ?>
				<li>I would like to order a <?= $soda ?> <?= $type ?> please</li>
			<?php endforeach ?>
		</ul>
		
	</body>
</html>