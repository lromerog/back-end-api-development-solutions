<?php

	include 'config.php';

	include_once 'config.php';

	// include_once 'non-existing-file.php' // This will throw an error, but the script will proceed

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

	<h1>Control structures: include</h1>

	<h2>var_dump of $config coming from config.php</h2>
	<?php var_dump($config) ?>

</body>
</html>