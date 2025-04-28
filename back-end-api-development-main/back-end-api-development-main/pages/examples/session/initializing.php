<?php

	session_start();

	$hasVisited	=	isset( $_SESSION[ 'hasVisited' ] );

	if ( !isset( $_SESSION[ 'hasVisited' ] ) )
	{
		$_SESSION[ 'hasVisited' ]	=	true;
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

	<h1>Session: initializing</h1>

	<?php if ( $hasVisited == false ): ?>
		<p>Welcome! This is your first visit to this website using sessions.</p>
	<?php else: ?>
		<p>Aha! Seems to me you have already been here...</p>
	<?php endif ?>

	<h1>var_dump() of $GLOBALS</h1>

	<?php var_dump( $GLOBALS ); ?>
</body>
</html>