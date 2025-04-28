<?php

	$email = ( isset( $_POST['email'] ) ? strtoupper( $_POST['email'] ) : "not set yet" );

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

	<h1>Superglobals: validation</h1>

		<p>Current email: <?= $email ?></p>

		<form action="validation.php" method="POST">

			<ul>
				<li>
					<label for="email">Email:</label>
					<input type="text" name="email" id="email">
				</li>
				<li>
					<label for="password">Password:</label>
					<input type="password" name="password" id="password">
				</li>
			</ul>

			<input type="submit" value="Send">
		</form>
		
		<p>Content of $_POST: <pre><?php print_r( $_POST ) ?></pre></p>
		<p>Content of $_POST['email']: <?= $_POST['email'] ?></p>
</body>
</html>