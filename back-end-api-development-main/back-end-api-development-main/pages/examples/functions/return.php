<?php

	function sayGoodbye() 
	{
		$string1 	=	'See you!';
		$string2	=	'From a function with a return value';

		return $string1 . ' ' . $string2;
	}

	function isLeapYear( $year ) {
		
		//(int) to make sure we force the value into an integer type
		$year = (int) $year;
		
		if ( ( $year  % 4 ) == 0) 
		{
			if( ( $year % 100 ) == 0) 
			{
				if( ( $year ) % 400 == 0 ) 
				{
					return true;
				}
				else 
				{
					return false;
				}
			}
			else 
			{
				return true;
			}
		}
		else 
		{
			return false;
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

		<h1>Functions: return statements</h1>

		<p><?= sayGoodbye() ?></p>

		<p>Is 1995 a leap year? <i>Bzz, bzz. <?= (isLeapYear(1995)) ? 'Yes' : 'No' ?>.</i></p>

		<p>Is 2024 a leap year? <i>Bzz, bzz. <?= (isLeapYear(2024)) ? 'Yes' : 'No' ?>.</i></p>
	</body>
</html>