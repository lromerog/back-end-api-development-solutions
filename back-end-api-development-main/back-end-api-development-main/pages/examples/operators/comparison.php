<?php

	$statement1 = ( 4 == 4 );
	$statement2 = ( "4" === 4 );
	$statement3 = ( 4 != 3 );
	$statement4 = ( 5 > 9 );
	$statement5 = ( 3 < 9 );
	$statement6 = ( 8 >= 9 );
	$statement7 = ( 8 <= 8 );

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

	<h1>Operators: comparison</h1>

	<p>4 == 4 : <?= $statement1 ?> (<?php var_dump( $statement1 ) ?>)</p>
	<p>"4" === 4 : <?= $statement2 ?> (<?php var_dump( $statement2 ) ?>)</p>
	<p>4 != 3 : <?= $statement3 ?> (<?php var_dump( $statement3 ) ?>)</p>
	<p>5 > 9 : <?= $statement4 ?> (<?php var_dump( $statement4 ) ?>)</p>
	<p>3 < 9 : <?= $statement5 ?> (<?php var_dump( $statement5) ?>)</p>
	<p>8 >= 9 : <?= $statement6 ?> (<?php var_dump( $statement6 ) ?>)</p>
	<p>8 <= 8 : <?= $statement7 ?> (<?php var_dump( $statement7 ) ?>)</p>

</body>
</html>