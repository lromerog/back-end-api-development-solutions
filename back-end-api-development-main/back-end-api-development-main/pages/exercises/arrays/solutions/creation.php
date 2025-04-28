<?php

	// First way
	$animals =  array(
		'cat', 
		'dog', 
		'sheep', 
		'snake',
		'frog'
	);

   // Second way
   $animals[]   =  'whale';
   $animals[]   =  'tiger';
   $animals[]   =  'heron';
   $animals[]   =  'ladybug';
   $animals[]   =  'cat';

   var_dump($animals);

   $vehicles = array(
		'landVehicles' =>  array(
   				'Vespa', 'bicycle'
   			),
		'waterVehicles' => array(
				'surfboard', 'raft', 'schooner', 'three-master'
			),
		'airVehicles' => array(
				'hot air balloon', 'helicopter', 'B52'
			),
   );

   var_dump($vehicles);

   // Part 2
   $numbers = array(1, 2, 3, 4, 5);
   $productOfNumbers = array_product($numbers);

   var_dump($productOfNumbers);

   $oddNumbers = array();

   foreach( $numbers as $number )
   {
      if ( $number % 2 != 0 )
      {
         $oddNumbers[]   =   $number;
      }
   }

   var_dump($oddNumbers);

   $numbersReversed = array_reverse($numbers);
   var_dump($numbersReversed);
   $sameKeyNumbersAdded = array();

   foreach ($numbers as $key => $number)
   {
      if ( isset( $numbersReversed[ $key ] ))
      {
         $sameKeyNumbersAdded[ $key ]  =  $numbersReversed[ $key ] + $number;
      }
   }

   var_dump($sameKeyNumbersAdded);

?>
