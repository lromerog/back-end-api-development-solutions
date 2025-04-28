<?php

	class Finn {

		public $timestamp, $secretMessage;
		public $name 			= 	'Finn';
		public $profilePicture 	= 	'finn.jpg';

		// Constructor is executed automatically when making an instance of the class
		public function __construct( )
		{
			$this->secretMessage = 'Psst, this is a secret messages from ' . $this->name . ' coming from the constructor.';
			$this->timestamp = time();
		}
		
		public function getCatchPhrase() 
		{
			return 'Mathematical!';
		}

		public function setTimestamp( ) 
		{
			$this->timestamp = time();
		}

		public function getTimestamp()
		{
			$processedTimestamp = date( "H:i", $this->timestamp );
			return $processedTimestamp;
		}

	}

?>