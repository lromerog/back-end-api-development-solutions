<?php

	// Part 1
	$textOriginal = file_get_contents('text-file.txt');
	$text = file_get_contents('text-file.txt');

	$textChars = str_split($text);

	natcasesort($textChars);

	$textChars = array_reverse($textChars);

	$reversedTextChars = array_reverse($textChars);

	function characterCounter($text)
	{
		$characterCounter = [];

		foreach ($text as $character) 
		{ 
			if ( isset($characterCounter[$character]) )
			{
				++$characterCounter[$character];
			}
			else
			{
				$characterCounter[$character] = 1;
			}
		}

		return $characterCounter;
	}

	var_dump(characterCounter($textChars));

	// Part 2
	// ----------------
	$textOriginal2 = file_get_contents('text-file.txt');

	// Convert all character to lower case
	$textLowerCase = strtolower($textOriginal2);

	// Split text into array, each letter being a value
	$textChars2 = str_split($textLowerCase);

	// Count the occurences of all the characters
	$countedCharacters = characterCounter($textChars2);

	// Only keep the characters that are a->z
	$alphabetCounter = [];
	foreach ( $countedCharacters as $character => $count)
	{
		// Get decimal value of character
		// -> see unicode chart
		$characterDecimalNumber = ord($character);

		// Everything between 97 and 122 is a-z
		if ($characterDecimalNumber >= 97 && $characterDecimalNumber <= 122)
		{
			// Copy the count of that character to the new array
			$alphabetCounter[$character] = $count;
		}
	}

	var_dump($alphabetCounter);

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/global.css">
    <link rel="stylesheet" type="text/css" href="/css/directory.css">
    <link rel="stylesheet" type="text/css" href="/css/facade.css">
</head>
<body>

</body>
</html>