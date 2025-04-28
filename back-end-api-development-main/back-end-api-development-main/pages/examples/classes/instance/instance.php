<?php

	// This file would be the so called controller
	require_once 'Finn.php';

	// Create new instance of class
	$finn = new Finn();

	// What's the type of this class (purely for demonstrative purposes)
	$finnType 		= 	gettype( $finn );

	$name 				= 	$finn->name;
	$profilePicture 	= 	$finn->profilePicture;

	$finn->setTimestamp();

	$timestamp 		= 	$finn->getTimestamp();
	$catchPhrase 	= 	$finn->getCatchPhrase();


	// Call the view and print the variables in the view
	require_once 'view.html';

?>