<?php

	// Time
	$time 		= 	time();
	$microtime 	= 	microtime();
	$mktime 	= 	mktime( 23 , 57 , 23 , 9 , 22 , 2001 );

	// Date
	$date01		=	date( 'H-i-s-m-d-Y' , 1001195843 );
	$date02		= 	date( 'H:i:s m/d/Y' , 1001195843 );
	$date03 	=	date( 'H:i:s m/d/Y' );
	$date04		=	date( 'l jS \of F Y h:i:s A' );
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

	<h1>Time: functions</h1>

	<h1>Time</h1>

		<ul>
			<li><code>time()</code>: <?= $time ?></li>
			<li><code>microtime()</code>: <?= $microtime ?></li>
			<li><code>mktime( 23 , 57 , 23 , 9 , 22 , 2001 )</code>: <?= $mktime ?></li>
		</ul>	

	<h2>Date</h2>

	<ul>
	    <li><code>date( 'H-i-s-m-d-Y' , 1001195843 )</code>: <?php echo $date01 ?></li>
	    <li><code>date( 'H:i:s m/d/Y' , 1001195843 )</code>: <?php echo $date02 ?></li>
	    <li><code>date( 'H:i:s m/d/Y' )</code>: <?php echo $date03 ?></li>
	    <li><code>date( 'l jS \of F Y h:i:s A' )</code>: <?php echo $date04 ?></li>
	</ul>

</body>
</html>