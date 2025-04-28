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
	
	$carKey1 = 0;
	$carKey2 = 0;

	/*
	while( $carKey1 < 0 ) {
		echo $cars[$carKey1] . '<br>';
		++$carKey1;
	}
	*/
	
	/*
	do {
		echo $cars[$carKey2] . '<br>';
		++$carKey2;
	} while( $carKey2 < 0 )
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

		<h1>Looping statements: do while</h1>

		<h2>while</h2>
		<ul>
			<?php while ( $carKey1 < 0 ): ?>
				<li><?= $cars[$carKey1] ?></li>
				<?php ++$carKey1 ?>
			<?php endwhile ?>
		</ul>

		<h2>do while loop</h2>
		<ul>
			<?php 
				/* Remark: Does not have alternative syntax*/
				do {
					echo '<li>' . $cars[$carKey2] . '</li>';
					++$carKey2;
				} while ( $carKey2 < 0 )
			?>
		</ul>

	</body>
</html>