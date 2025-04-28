<?php		
	
	$classmates = array('Frederik', 'Sarah', 'Mathieu', 'Cederic');

	//This function will fail because the $classmates variable isn't known inside of the function
	// The scope of the function code block is limited to that code block itself and can be regarded as a completely isolated script
	/*
	function createInvitationList() 
	{
		return implode(', ', $classmates ); // implode glues all the values of an array together using a "delimiter" = which is a string that separates the values of the array
	}
	*/

	// This will fix the problem, but is NOT the recommended way
	// Global is usually reserved for configuarion variables that are common throughout the entire application
	function createInvitationListGlobal()
	{
		global $classmates;

		return implode(', ', $classmates );
	}


	function createInvitationListParameter($classmates)
	{
	

		return implode(', ', $classmates );
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
		
		<h1>Functions: scope global</h1>

		<h2>Using global scope - <b>NOT RECOMMENDED</b></h2>
		<p>The birthday boy invites: <?= createInvitationListGlobal() ?></p>

		<h2>Using return statement</h2>
		<p>The birthday boy invites: <?= createInvitationListParameter($classmates) ?></p>

	</body>
</html>