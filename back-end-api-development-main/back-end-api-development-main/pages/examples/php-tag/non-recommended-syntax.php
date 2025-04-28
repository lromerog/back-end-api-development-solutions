<?php

$varString	=	"Hello World";

echo '  <!DOCTYPE html>
		<html>
			<head>
		        <meta charset="utf-8">
		        <meta name="viewport" content="width=device-width, initial-scale=1">
		        <title>Voorbeeld van Full php</title>
				<link rel="stylesheet" type="text/css" href="/css/global.css">
				<link rel="stylesheet" type="text/css" href="/css/directory.css">
				<link rel="stylesheet" type="text/css" href="/css/facade.css">
			</head>
			
			<body>
			
			<h1>HTML in code block - <b>NOT RECOMMENDED</b></h1>';

echo '<p>' . $varString . '</p>';

echo '<p>This is an old school way of printing HTML and is to be avoided. Try to keep PHP and HTML separated as much as possible and use inline syntax</p>';

echo '		</body>
		</html>';
?>