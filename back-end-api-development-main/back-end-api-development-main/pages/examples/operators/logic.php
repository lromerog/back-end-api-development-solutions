<?php

	$andLogic1 = ( 4 == 4 ) && (5 == 5);
	$andLogic2 = ( 4 == 4 ) && (5 == 5) && (6 == 6);
	$andLogic3 = ( 4 == 4 ) && (5 == 4);

	$orLogic1 = ( 8 == 4 ) || (5 == 10);
	$orLogic2 = ( 4 == 4 ) && (5 == 5) && (6 == 6);
	$orLogic3 = ( 4 == 4 ) && (5 == 4);

	$negationLogic1 = !true;
	$negationLogic2 = !(1 <= 10);

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

	<h2>and &&</h2>

<p><code>( 4 == 4 ) && (5 == 5);</code> will evaluate to <code><?= ($andLogic1) ? 'true' : 'false' ?></code></p>
<p><code>( 4 == 4 ) && (5 == 5) && (6 == 6);</code> will evaluate to <code><?= ($andLogic2) ? 'true' : 'false' ?></code></p>
<p><code>( 4 == 4 ) && (5 == 4);</code> will evaluate to <code><?= ($andLogic3) ? 'true' : 'false' ?></code></p>
	
	<h2>or ||</h2>

<p><code>( 8 == 4 ) || (5 == 10);</code> will evaluate to <code><?= ($orLogic1) ? 'true' : 'false' ?></code></p>
<p><code>( 4 == 4 ) && (5 == 5) && (6 == 6);</code> will evaluate to <code><?= ($orLogic2) ? 'true' : 'false' ?></code></p>
<p><code>( 4 == 4 ) && (5 == 4);</code> will evaluate to <code><?= ($orLogic3) ? 'true' : 'false' ?></code></p>

	<h2>negation !</h2>
<p><code>!true;</code> will evaluate to <code><?= ($negationLogic1) ? 'true' : 'false' ?></code></p>
<p><code>!(1 <= 10);</code> will evaluate to <code><?= ($negationLogic2) ? 'true' : 'false' ?></code></p>
</body>
</html>