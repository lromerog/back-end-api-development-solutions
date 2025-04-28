

<?php		
	
	function icecreamRobotRonny() {
	
		static $cones = 9;
		
		--$cones;

		if ( $cones > 0 ) 
		{
			return 'Ronny: Ice cream ready! I can make ' . $cones . ' more cones';
		} 
		else 
		{
			return 'Ronny: All out of ice cream cones, pleas refill me!';
		}
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
		
		<h1>Functions: scope static</h1>
		
		<h3>IcecreamRobot Ronny</h3>
		<ul>
			<?php for ($cones = 0; $cones < 12; ++$cones): ?>

				<li><?= icecreamRobotRonny() ?></li>
			
			<?php endfor ?>
		</ul>

	</body>
</html>