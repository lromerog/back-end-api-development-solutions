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

		<h1>Looping statements: alternative syntax</h1>

		<h2>Regular syntax - <b>NOT RECOMMENDED</b></h2>

		<ul>
			<?php 
				foreach( $cars as $car) {
					echo '<li>' . $car . '</li>';
				} 
			?>
		</ul>

		<h2>Alternative syntax</h2>
		<ul>
			<?php foreach( $cars as $car): ?>
				<li><?= $car ?></li>
			<?php endforeach ?>
		</ul>

	</body>
</html>