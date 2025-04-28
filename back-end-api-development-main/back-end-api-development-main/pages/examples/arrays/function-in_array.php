<?php

	$cars = array( 
		'Volvo', 
		'Porsche', 
		'Honda'
	);
	
	$carToSearch = 'Ford';
	
	if( in_array( $carToSearch, $cars ) ) 
	{
		$result = $carToSearch . ' was found in the array containing cars';
	}
	else 
	{
		$result = $carToSearch . ' wasn\'t found in the array containing cars';
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
	
	<h1>Array function: in_array()</h1>

	<?php var_dump( $cars ) ?>

	<p><?php echo $result ?></p>

</body>
</html>