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
	
	$carKey = 0;
	
	/*
	while( $cars[$carKey] != 'Peugot') {
		echo $cars[$carKey] . '<br>';
		++$carKey;
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

		<h1>Looping statements: while</h1>

		<ul>
		    
			<?php while ( $cars[$carKey] != 'Peugot' ): ?>
				<li><?= $cars[$carKey] ?></li>
				<?php ++$carKey ?>
			<?php endwhile ?>
		</ul>

	</body>
</html>