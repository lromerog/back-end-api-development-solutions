<?php

	$sodas = array(	
		'Cola' 	=> 	array( 
			'Regular', 
			'Zero', 
			'Light' 
		), 
		'Fanta' => 	array( 
			'Regular', 
			'Lemon'
		) 
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
	
	<h1>Arrays: multidimensional</h1>

	<?php var_dump( $sodas ) ?>

</body>
</html>