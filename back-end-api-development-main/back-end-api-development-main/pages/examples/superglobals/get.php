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

	<h1>Superglobals: $_GET</h1>

		<form action="get.php" method="get">

			<ul>
				<li>
					<label for="email">Email:</label>
					<input type="text" name="email" id="email">
				</li>
				<li>
					<label for="password">Paswoord:</label>
					<input type="password" name="password" id="password">
				</li>
			</ul>

			<input type="submit" value="Send">
		</form>
		
		<p>Content of $_GET: <pre><?php print_r( $_GET ) ?></pre></p>
		<p>Content of $_GET['email']: <?= $_GET['email'] ?></p>


</body>
</html>