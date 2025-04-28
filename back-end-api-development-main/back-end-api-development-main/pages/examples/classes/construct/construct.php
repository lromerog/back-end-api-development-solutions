<?php

	require_once 'Finn.php';

	// Create instance of Finn class
	$finn = new Finn();

	// What type is this instance? (purely for demonstrative purposes)
	$finnType 		= 	gettype( $finn );

	$name 				= 	$finn->name;
	$profilePicture 	= 	$finn->profilePicture;
	$secretMessage	 	= 	$finn->secretMessage;

	$timestamp 		= 	$finn->getTimestamp();
	$catchPhrase 	= 	$finn->getCatchPhrase();


	// Call the view and print the variables.
	require_once 'view.html';

?>